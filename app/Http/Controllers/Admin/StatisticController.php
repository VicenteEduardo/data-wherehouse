<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderedItem;
use App\Models\product;
use Illuminate\Http\Request;

class StatisticController extends Controller
{

public function payment(){

}


private $Logger;

public function __construct()
{
    $this->Logger = new Logger;
}



public function index()
    {

    $date= date('Y');
    $response['totalPayments']=  Order::where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');

    $jan=Order::where('status','=','Pago')->whereMonth('created_at', '=',01)->whereYear('created_at', '=', $date)->sum('price');
    $response['jan']= json_encode($jan);

    $fev=Order::whereMonth('created_at', '=',02)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');

    $response['fev']= json_encode($fev);

    $mar=Order::whereMonth('created_at', '=',03)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['mar']= json_encode($mar);

    $abr=Order::whereMonth('created_at', '=',04)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['abr']= json_encode($abr);
    $maio=Order::whereMonth('created_at', '=',05)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['maio']= json_encode($maio);
    $jun=Order::whereMonth('created_at', '=',06)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['jun']= json_encode($jun);
    $jul=Order::whereMonth('created_at', '=',07)->whereYear('created_at', '=', $date)->sum('price');
    $response['jul']= json_encode($jul);
    $ago=Order::whereMonth('created_at', '=','08')->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['ago']= json_encode($ago);
    /**d */
    $set=Order::whereMonth('created_at', '=','09')->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['set']= json_encode($set);
    $out=Order::whereMonth('created_at', '=','10')->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['out']= json_encode($out);
    $nov=Order::whereMonth('created_at', '=',11)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['nov']= json_encode($nov);

    $dez=Order::whereMonth('created_at', '=',12)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
    $response['dez']= json_encode($dez);


         //Logger
          $this->Logger->log('info', 'Visualizou o gráfico de pagamentos');

 // Obter os dados de produtos e contagem de solicitações com o valor total de cada produto
$products = OrderedItem::select('fk_product_id', \DB::raw('count(*) as total'))
->groupBy('fk_product_id')
->get();

// Extrair os IDs dos produtos
$productIds = $products->pluck('fk_product_id');

// Buscar os detalhes dos produtos (nome e preço) com uma única consulta
$productsDetails = Product::whereIn('id', $productIds)->get();

// Combinar os detalhes dos produtos com as quantidades solicitadas e calcular o valor total
$productsWithTotal = $products->map(function ($item) use ($productsDetails) {
// Encontrar o produto correspondente
$product = $productsDetails->firstWhere('id', $item->fk_product_id);

// Adicionar o total de vezes que o produto foi solicitado
$product->total_requested = $item->total;

// Calcular o valor total da encomenda (quantidade * preço do produto)
$product->total_value = $product->price * $item->total;

return $product;
});

// Ordenar os produtos pelo valor total (maior para menor)
$sortedProducts = $productsWithTotal->sortByDesc('total_value');

// Preparar os dados para o gráfico
$response['labels'] = $sortedProducts->pluck('name')->toArray(); // Nome dos produtos
$response['totals'] = $sortedProducts->pluck('total_requested')->toArray(); // Quantidade de pedidos
$response['values'] = $sortedProducts->pluck('total_value')->toArray(); // Valor total de cada produto
// Obter os dados de produtos e contagem de solicitações
 $products = OrderedItem::select('fk_product_id', \DB::raw('count(*) as total'))
 ->groupBy('fk_product_id')
 ->orderByDesc('total')
 ->get();

// Extrair apenas os IDs dos produtos
$productIds = $products->pluck('fk_product_id');

// Buscar os detalhes dos produtos com uma única consulta
$productsDetails = Product::whereIn('id', $productIds)->get();

// Combinar os detalhes dos produtos com as quantidades solicitadas
$productsWithTotal = $products->map(function ($item) use ($productsDetails) {
 // Encontrar o produto correspondente
 $product = $productsDetails->firstWhere('id', $item->fk_product_id);

 // Adicionar o total de vezes que o produto foi solicitado
 $product->total_requested = $item->total;

 return $product;
});

// Preparar os dados para o gráfico
$response['labels'] = $productsWithTotal->pluck('name')->toArray(); // Nome dos produtos
$response['totals'] = $productsWithTotal->pluck('total_requested')->toArray(); // Quantidade de pedidos




    // Contar o número de pedidos feitos por cada cliente (ordenando do maior para o menor)
    $topClients = Order::select('fk_user_id', \DB::raw('count(*) as total_orders'))
        ->groupBy('fk_user_id')  // Agrupar pelo ID do usuário (cliente)
        ->orderByDesc('total_orders')  // Ordenar pelo número total de pedidos em ordem decrescente
        ->get();

    // Buscar os detalhes dos clientes com base no fk_user_id
    $users = \App\Models\User::whereIn('id', $topClients->pluck('fk_user_id'))->get();

    // Combinar os dados de clientes com o número de pedidos
     $response['clientsWithOrders']= $topClients->map(function ($item) use ($users) {
        // Encontrar o cliente correspondente
        $user = $users->firstWhere('id', $item->fk_user_id);

        // Adicionar os dados do cliente ao item
        $item->user_name = $user->name;
        $item->user_email = $user->email; // Você pode adicionar mais detalhes do usuário aqui

        return $item;
    });




    // Contar o número de vezes que cada cliente comprou cada produto
    $favoriteBeverages = OrderedItem::select('orders.fk_user_id', 'ordered_items.fk_product_id', \DB::raw('count(*) as total_consumed'))
        ->join('orders', 'orders.id', '=', 'ordered_items.fk_order_id') // Junção entre as tabelas orders e ordered_items
        ->groupBy('orders.fk_user_id', 'ordered_items.fk_product_id')  // Agrupar pelo ID do cliente e do produto
        ->orderByDesc('total_consumed')  // Ordenar pela quantidade consumida, em ordem decrescente
        ->get();

    // Buscar os detalhes dos produtos (bebidas) com base no fk_product_id
    $products = \App\Models\Product::whereIn('id', $favoriteBeverages->pluck('fk_product_id'))->get();

    // Buscar os detalhes dos clientes (nomes) com base no fk_user_id
    $users = \App\Models\User::whereIn('id', $favoriteBeverages->pluck('fk_user_id'))->get();

    // Encontrar o produto mais comprado por cada cliente
    $response['clientsWithFavoriteBeverages'] = $favoriteBeverages->groupBy('fk_user_id')->map(function ($items) use ($products, $users) {
        // Encontrar o cliente correspondente
        $user = $users->firstWhere('id', $items[0]->fk_user_id);

        // Encontrar o produto mais comprado pelo cliente
        $favoriteItem = $items->first(); // O produto mais comprado será o primeiro, pois está ordenado
        $product = $products->firstWhere('id', $favoriteItem->fk_product_id);

        // Adicionar o nome do cliente e o produto favorito à coleção
        return [
            'user_name' => $user->name,
            'user_email' => $user->email,
            'favorite_product' => $product->name,
            'total_consumed' => $favoriteItem->total_consumed
        ];
    });



        return view('admin.statistic.all.payment.index',$response);





    }





    public function store(Request $request)
    {

        return redirect()->route('admin.ReportPayment.show', $request->year);
    }

    public function show($year)
    {

        $date=$year;

        $response['totalPayments']=  Order::with('courses')->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price')  ;
                $jan=Order::with('courses')->where('status','=','Pago')->whereMonth('created_at', '=',01)->whereYear('created_at', '=', $date)->sum('price');
                $response['jan']= json_encode($jan);

                $fev=Order::whereMonth('created_at', '=',02)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');

                $response['fev']= json_encode($fev);

                $mar=Order::whereMonth('created_at', '=',03)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['mar']= json_encode($mar);

                $abr=Order::whereMonth('created_at', '=',04)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['abr']= json_encode($abr);
                $maio=Order::whereMonth('created_at', '=',05)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['maio']= json_encode($maio);

                $jun=Order::whereMonth('created_at', '=',06)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['jun']= json_encode($jun);


                $jul=Order::whereMonth('created_at', '=',07)->whereYear('created_at', '=', $date)->sum('price');
                $response['jul']= json_encode($jul);
                $ago=Order::whereMonth('created_at', '=','08')->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['ago']= json_encode($ago);
                /**d */
                $set=Order::whereMonth('created_at', '=','09')->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['set']= json_encode($set);

                $out=Order::whereMonth('created_at', '=','10')->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['out']= json_encode($out);
                $nov=Order::whereMonth('created_at', '=',11)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['nov']= json_encode($nov);


                $dez=Order::whereMonth('created_at', '=',12)->where('status','=','Pago')->whereYear('created_at', '=', $date)->sum('price');
                $response['dez']= json_encode($dez);
                $response['date']=  $date;

                 //Logger
                  $this->Logger->log('info', 'Visualizou o gráfico de pagamentos');


                return view('admin.statistic.all.payment.index',$response);


    }


}
