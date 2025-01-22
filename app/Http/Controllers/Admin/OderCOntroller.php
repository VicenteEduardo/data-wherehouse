<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderedItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class OderCOntroller extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {

        $response['orders'] = Order::where('fk_user_id', Auth()->user()->id)->where('status', '!=', 'aguardando-checkout')->get();
        return view('admin.oder.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment($id)
    {


        try {
            $response['order'] = Order::where('fk_user_id', Auth()->user()->id)->find($id);

            if ($response['order']) {
                return view('admin.oder.playment.index', $response);
            } else
                return  redirect()->route(
                    'admin.oder.index'
                );
        } catch (\Throwable $th) {
            return  redirect()->back();
        }
    }


    public function show($id)
    {
        $response['OrderedItems'] = OrderedItem::with('products', 'orders')->where('fk_order_id', $id)->get();
        $response['order']=Order::find($id);
        $response['price'] = OrderedItem::with('products', 'orders')->where('fk_order_id', $id)->sum('price');
        return view('admin.oder.details.index', $response);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $validation = $request->validate([

            'anexo' => 'mimes:jpg,png,jpeg,pdf,docx'
        ]);

        if ($file = $request->file('anexo')) {
            $file = $file->store('pymanets');
        } else {
            $file = Order::find($id)->photo;
        }
        Order::find($id)->update([
            'anexo' => $file,
            'status' => "Em Validação"
        ]);
        //Logger
        $this->Logger->log('info', 'Adcionou anexo de pagamento da encomenda ' . $id);

        return redirect("admin/pedidos-compras/index")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou encomenda com o identificador ' . $id);
        OrderedItem::where('fk_order_id', $id)->delete();
        Order::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
