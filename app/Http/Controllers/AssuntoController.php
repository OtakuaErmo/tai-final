<?php

namespace App\Http\Controllers;

use App\AssuntoModel;
use App\EscopoModel;
use App\ThreadsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AssuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //metodo nao mais utilizado

        $objAssunto = AssuntoModel::orderBy('escopo_id')->get();
        return view('home')->with('assuntos', $objAssunto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objE = EscopoModel::orderBy('id')->get(); //passa os dados dos escopos para a tag select
        return view('admin.assuntos.create')->with('escopos', $objE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required|max:255',
            'escopo_id' => 'required',
        ]);
        $objA = new AssuntoModel();
        $objA->assunto = ucwords($request->assunto);
        $objA->escopo_id = $request->escopo_id;
        $objA->save();
        //return redirect()->route('admin.escopo.create');
        return redirect()->back()->withInput()->withErrors(['Assunto ' . $request->assunto . ' inserido com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //metodo nao mais utilizado

        /*
        $objT = ThreadsModel::where('assunto_id', '=', $id)->get();
        return view('threadsList')->with('threads', $objT);
*/
        // $objA = AssuntoModel::orderBy('escopo_id')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objA = AssuntoModel::findorfail($id); 
        $objE = EscopoModel::orderBy('id')->get(); //passa os dados dos escopos para tag select
        return view('admin.assuntos.edit')->with(['assunto' => $objA, 'escopos' => $objE]);
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
            'assunto' => 'required',
            'escopo_id' => 'required',
        ]);
        $objA = AssuntoModel::findorfail($request->id);
        $objA->assunto = $request->assunto;
        $objA->escopo_id = $request->escopo_id;
        $objA->save();
        return redirect()->action('EscopoController@index')->withInput()->withErrors(['Assunto ' . $request->assunto . ' editado com sucesso!']);;
        //return redirect()->back()->withInput()->withErrors(['Assunto ' . $request->assunto . ' editado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::id() === 1) {
            $objA = AssuntoModel::findOrFail($id);
            $data = $objA->assunto;
            $objA->delete();

            return redirect()->back()->withInput()->withErrors(['Escopo ' . $data . ' removido com sucesso!']);
        }else{
            return redirect()->action('EscopoController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }
}
/*
return redirect()->action('EscopoController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
*/
