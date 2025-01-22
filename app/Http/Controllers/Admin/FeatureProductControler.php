<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\FeatureProduct;
use App\Models\product;
use Illuminate\Http\Request;

class FeatureProductControler extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['featureProducts']= FeatureProduct::with('products')->get();
        return view('admin.featureProduct.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['products']= product::get();
        return view('admin.featureProduct.create.index',$response);
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

        $featureProduct = FeatureProduct::create([

            'fk_product_id' => $request->fk_product_id,  ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou  produtos-em-destaque com o nome ' );
        return redirect("admin/produtos-em-destaque/show/$featureProduct->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $response['featureProduct'] = FeatureProduct::with('products')->find($id);
              //Logger
              $this->Logger->log('info', 'Visualizou um produtos-em-destaque com o identificador' . $id);
        return view('admin.featureProduct.details.index', $response);
    }

    public function edit($id)
    {

        $response['featureProduct'] = FeatureProduct::with('products')->find($id);

        $response['products']= product::get();
        $this->Logger->log('info', 'Entrou em editar  produtos-em-destaque com o identificador ' . $id);
        return view('admin.featureProduct.edit.index', $response);
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

        FeatureProduct::find($id)->update([
            'fk_product_id' => $request->fk_product_id,
 ]);
          //Logger
          $this->Logger->log('info', 'Editou um publicidade com o identificador ' . $id);

        return redirect("admin/produtos-em-destaque/show/$id")->with('edit', '1');
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
           FeatureProduct::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
