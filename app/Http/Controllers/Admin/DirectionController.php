<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['directions']= Direction::get();
        return view('admin.direction.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.direction.create.index');
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

        $file = $request->file('image')->store('Directions');
        $Direction = Direction::create([
            'photo' => $file,
            'name' => $request->name,
            'title' => $request->description,

        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um cargo directivo com o nome ' . $Direction->name);
        return redirect("admin/corpo-directivo/show/$Direction->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['direction'] = Direction::find($id);
              //Logger
              $this->Logger->log('info', 'Visualizou um Cargo Directivo com o identificador ' . $id);
        return view('admin.direction.details.index', $response);
    }

    public function edit($id)
    {

        $response['direction'] = Direction::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar  Cargo Directivo com o identificador ' . $id);
        return view('admin.direction.edit.index', $response);
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
            'description' => 'max:255',
            'image' => 'mimes:jpg,png,jpeg'
        ]);




        if($file = $request->file('image')){
            $file = $file->store('Direction');
        }else{
            $file = Direction::find($id)->photo;
        }

        Direction::find($id)->update([
            'photo' => $file,
            'name' => $request->name,
            'title' => $request->description,
        ]);
          //Logger
          $this->Logger->log('info', 'Editou um Cargo Directivo com o identificador ' . $id);

        return redirect("admin/corpo-directivo/show/$id")->with('edit', '1');
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
           $this->Logger->log('info', 'Eliminou cargo directivo  com o identificador ' . $id);
        Direction::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
