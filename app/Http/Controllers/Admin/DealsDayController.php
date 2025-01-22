<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DealsDay;
use App\Models\product;
use Illuminate\Http\Request;

class DealsDayController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['dealsDays']= DealsDay::with('products')->get();
        return view('admin.dealsDay.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['products']= product::get();
        return view('admin.dealsDay.create.index',$response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'fk_product_id' => 'required',
   ]);

        $featureProduct = DealsDay::create([

            'fk_product_id' => $request->fk_product_id,  ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou  ofertas-do-dia com o nome ' );
        return redirect("admin/ofertas-do-dia/show/$featureProduct->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $response['dealsDay'] = DealsDay::with('products')->find($id);
              //Logger
              $this->Logger->log('info', 'Visualizou um ofertas-do-dia com o identificador' . $id);
        return view('admin.dealsDay.details.index', $response);
    }

    public function edit($id)
    {

        $response['featureProduct'] = DealsDay::with('products')->find($id);

        $response['products']= DealsDay::get();
        $this->Logger->log('info', 'Entrou em editar  ofertas-do-dia com o identificador ' . $id);
        return view('admin.dealsDay.edit.index', $response);
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
            'fk_product_id' => 'required',
   ]);

   DealsDay::find($id)->update([
            'fk_product_id' => $request->fk_product_id,
 ]);
          //Logger
          $this->Logger->log('info', 'Editou um publicidade com o identificador ' . $id);

        return redirect("admin/ofertas-do-dia/show/$id")->with('edit', '1');
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
           $this->Logger->log('info', 'Eliminou publicidade  com o identificador ' . $id);
           DealsDay::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
