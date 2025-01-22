<?php

namespace App\Http\Controllers\Admin;


use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CustomerAccount;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use PhpParser\Node\Stmt\TryCatch;

class ClientController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['users'] =  User::where('level', '!=', 'Administrador')->get();;

        //Logger
        $this->Logger->log('info', 'Listou Clientes');

        return view('admin.userClient.list.index', $response);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {

            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();
            $response['user'] = User::find($id);

try {
    $response['CustomerAccount'] = CustomerAccount::where('fk_user_id', $id)->first();
       //Logger
       $this->Logger->log('info', 'Visualizou um Utilizador com o identificador ' . $id);

       return view('admin.userClient.details.index', $response)     ;
} catch (\Throwable $th) {

    return view('admin.userClient.details.index', $response)     ;
}



        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activity($id)
    {

        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {

            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();

            //Logger
            $this->Logger->log('info', 'Visualizou as suas próprias actividades');

            return view('admin.userClient.activity.index', $response);
        }
    }



    public function edit($id)
    {
        $response['users'] =  User::where('level', '!=', 'Formador')->get();

        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {

            $response['user'] = User::find($id);



            try {
                $response['CustomerAccount'] = CustomerAccount::where('fk_user_id', $id)->first();
                   //Logger
                     //Logger
            $this->Logger->log('info', 'Entrou em editar um Utilizador com o identificador ' . $id);

                   return view('admin.userClient.details.index', $response)     ;
            } catch (\Throwable $th) {
        //Logger
        $this->Logger->log('info', 'Entrou em editar um Utilizador com o identificador ' . $id);
                return view('admin.userClient.details.index', $response)     ;
            }



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

        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {

            $request->validate([
                'name' => 'required|string|max:255',
                'level' => 'required|string|max:40',
                'phone_number' => 'required|numeric',
                'email' => 'required|string|email|max:255|',
                'nif' => 'required|string|max:255|unique:customer_accounts'.',id,' . $id,
                'alvara' => 'mimes:jpg,png,jpeg,pdf',


            ]);

            if ($request->file('alvara')) {
                if ($request->file('alvara')) {
                    $request->validate([
                        'alvara' => 'required|mimes:jpg,png,jpeg,pdf',
                    ]);
                }
                $alvara = '/storage/' . $request->file('alvara')->store('alvara');
            } else {
                $alvara = CustomerAccount::find($id)->alvara;
            }



            if (isset($request->status)) {

                $user = User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'level' => $request->level,
                    'status' => $request->status,

                ]);
            } else {
                $user = User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'level' => $request->level,

                ]);
            }

            CustomerAccount::create([

                'phone_number' => $request->phone_number,
                'alvara' => $alvara,
                'nif' => $request->nif,
                'phone_number_secund' => $request->phone_number_secund,
                'fk_user_id' => Auth()->user()->id
            ]);



            //Logger
            $this->Logger->log('info', 'Editou sua conta ' . $id);

            return redirect()->route('admin.client.show', Auth()->user()->id)->with('edit', '1');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $count = User::count();

        if ($count > 1) {
            //Logger
            $this->Logger->log('info', 'Eliminou um Utilizador com o identificador ' . $id);

            User::find($id)->delete();
            return redirect()->back()->with('destroy', '1');
        } else {
            return redirect()->back();
        }
    }
}
