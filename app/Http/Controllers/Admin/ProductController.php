<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['produts']= product::get();
        return view('admin.produts.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produts.create.index');
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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
              'price' => 'required|numeric',
            'quant' => 'required|numeric',
            'description' => 'required|max:255',
            'category' => 'required|max:255',
            'photo' => 'required|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('photo')->store('products');
        $product = product::create([
            'photo' => $file,
            'name' => $request->name,
            'quant' => $request->quant,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,

        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um produto com o nome ' . $product->name);
        return redirect("admin/produtos/show/$product->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['product'] = product::find($id);
              //Logger
              $this->Logger->log('info', 'Visualizou um produto com o identificador' . $id);
        return view('admin.produts.details.index', $response);
    }

    public function edit($id)
    {

        $response['product'] = product::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar  produto com o identificador ' . $id);
        return view('admin.produts.edit.index', $response);
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
            'name' => 'required|max:255',
              'price' => 'required|numeric',
            'quant' => 'required|numeric',
            'description' => 'required|max:255',
            'photo' => 'mimes:jpg,png,jpeg'
        ]);

        if ($file = $request->file('photo')) {
            $file = $file->store('products');
        } else {
            $file = product::find($id)->photo;
        }
         product::find($id)->update([
            'photo' => $file,
            'name' => $request->name,
            'quant' => $request->quant,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,

     ]);
          //Logger
          $this->Logger->log('info', 'Editou um produto com o identificador ' . $id);

        return redirect("admin/produtos/show/$id")->with('edit', '1');
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
           $this->Logger->log('info', 'Eliminou produto  com o identificador ' . $id);
           product::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
