<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\publicity;
use Illuminate\Http\Request;

class publicityController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['publicitys']= publicity::get();
        return view('admin.publicity.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publicity.create.index');
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
            'name' => 'max:255',

            'photo' => 'required|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('photo')->store('products');
        $product = publicity::create([
            'photo' => $file,
            'name' => $request->name,  ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou uma publicidade com o nome ' . $product->name);
        return redirect("admin/publicidades/show/$product->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['publicity'] = publicity::find($id);
              //Logger
              $this->Logger->log('info', 'Visualizou uma publicidade com o identificador' . $id);
        return view('admin.publicity.details.index', $response);
    }

    public function edit($id)
    {

        $response['publicity'] = publicity::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar  publicidade com o identificador ' . $id);
        return view('admin.publicity.edit.index', $response);
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
            'name' => 'max:255',
      'photo' => 'mimes:jpg,png,jpeg'
        ]);

        if ($file = $request->file('photo')) {
            $file = $file->store('products');
        } else {
            $file = publicity::find($id)->photo;
        }
        publicity::find($id)->update([
            'photo' => $file,
            'name' => $request->name,


     ]);
          //Logger
          $this->Logger->log('info', 'Editou um publicidade com o identificador ' . $id);

        return redirect("admin/publicidades/show/$id")->with('edit', '1');
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
           publicity::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
