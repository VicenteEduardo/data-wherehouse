<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Order;
use PDF;
use App\Models\OrderedItem;
use Illuminate\Http\Request;

class OrdersProductController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['orders'] = Order::with('useres')->where('status', '!=', 'aguardando-checkout')->get();
        return view('admin.oderPeoduct.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['OrderedItems'] = OrderedItem::with('products', 'orders')->where('fk_order_id', $id)->get();
        $response['price'] = OrderedItem::with('products', 'orders')->where('fk_order_id', $id)->sum('price');
        return view('admin.oderPeoduct.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $response['order'] = Order::with('useres')->find($id);

            if ($response['order']) {
                return view('admin.oderPeoduct.playment.index', $response);
            } else
                return  redirect()->route(
                    'admin.oderPeoduct.index'
                );
        } catch (\Throwable $th) {
            return  redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([

            'status' => 'required|max:255',
        ]);


        Order::find($id)->update([

            'status' => $request->status

        ]);

        return redirect("admin/encomenda-clientes/index")->with('edit', '1');
    }

    public function print($id)
    {
        $response['order'] = Order::with('useres')->find($id);
        $response['OrderedItems'] = OrderedItem::with('products', 'orders')->where('fk_order_id', $id)->get();
        $response['price'] = OrderedItem::with('products', 'orders')->where('fk_order_id', $id)->sum('price');
        $pdf = PDF::loadview('pdf.payments.index', $response);

        //Logger
        $this->Logger->log('info', 'Imprimiu uma lista de Pagamentos');
        return $pdf->setPaper('A4',)->stream('pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou encomenda com o identificador ' . $id);
        OrderedItem::where('fk_order_id', $id)->delete();
        Order::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
