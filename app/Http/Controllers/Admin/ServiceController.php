<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Warrant;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['warrants']= Warrant::get();
        return view('admin.Services.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Services.create.index');
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
            'description' => 'max:255',

            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('image')->store('services');
        $service = Service::create([
            'photo' => $file,
            'name' => $request->name,
            'description' => $request->description,

        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um serviço com o nome ' . $service->name);
        return redirect("admin/servicos/show/$service->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['service'] = Warrant::find($id);
              //Logger
              $this->Logger->log('info', 'Visualizou uma Submissão de Projectos' . $id);
        return view('admin.Services.details.index', $response);
    }

    public function edit($id)
    {

        $response['service'] = Warrant::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar  Submissão de Projectos com o identificador ' . $id);
        return view('admin.Services.edit.index', $response);
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
            'status' => 'max:255',
         ]);



         Warrant::find($id)->update([
            'status' => $request->status,

     ]);
          //Logger
          $this->Logger->log('info', 'Editou um Submissão de Projectos com o identificador ' . $id);

        return redirect("admin/servicos/show/$id")->with('edit', '1');
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
           $this->Logger->log('info', 'Eliminou Imagem do Slideshow  com o identificador ' . $id);
        Service::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
