<?php

namespace App\Http\Controllers;

use App\AssuntoModel;
use App\EscopoModel;
use Illuminate\Http\Request;

class AssuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $objE = EscopoModel::orderBy('id')->get();
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
        return redirect()->back()->withInput()->withErrors(['Assunto '. $request->assunto.' inserido com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $objE = EscopoModel::orderBy('id')->get();
        return view('admin.assuntos.edit')->with(['assunto' => $objA, 'escopos' => $objE]);
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
        //
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
}
