<?php

namespace App\Http\Controllers;

use App\ComentarioModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $url = 'http://localhost:8002/api/threads';

    public function index()
    {
        //
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
        $objU = User::where('id', '=', $id)->first();
        $objC = ComentarioModel::where('user_id', '=', $id)->orderBy('created_at', 'desc')->get();
        // dd($objU);

        $response = Http::get($this->url . '/user/filter' . '/' . $id);

        $objT = json_decode(json_encode($response->json()));

        return view('user.profile')->with(['threads' => $objT, 'user' => $objU, 'comentarios' => $objC]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objU = User::where('id', '=', $id)->first();
        return view('user.edit')->with('user', $objU);
    }

    public function editPassword($id)
    {
        $objU = User::where('id', '=', $id)->first();
        return view('user.editPassword')->with('user', $objU);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $objU = User::findorfail($request->id);

        $objU->name = $request->name;
        $objU->email = $request->email;

        $objU->save();


        return redirect()->back()->withInput()->withErrors(['Usuário ' . $request->name . ' editado com sucesso!']);
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'password' => 'required',
        ]);

        $objU = User::findorfail($request->id);
        $objU->password =  Hash::make($request->password);
        $objU->save();
        return redirect()->back()->withInput()->withErrors(['Senha editada com sucesso!']);
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
    }

    public function search(Request $request)
    {
        $query = DB::table('users');
        if (!empty($request->name)) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $objU = $query->orderBy('id')->get();

        return view('assuntos.filter')->with(['users'=> $objU]);
    }
}
