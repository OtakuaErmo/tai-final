<?php

namespace App\Http\Controllers;

use App\AssuntoModel;
use App\EscopoModel;
use App\ThreadsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EscopoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $objE = EscopoModel::orderBy('id')->get();
        //$escopos = EscopoModel::with('assuntos')->get();
        //$escopoexemplo = EscopoModel::find(1);
        //dd($escopoexemplo->assuntos);
        //$comments = EscopoModel::find(1)->assuntos;
        $objT = ThreadsModel::orderBy('created_at', 'DESC')->paginate(8);
        return view('index')->with(['escopos' => $objE, 'threads' => $objT]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.escopos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::id() === 1) {

            $request->validate([
                'escopo' => 'required|unique:escopos|max:255',
            ]);

            $objE = new EscopoModel();
            $objE->escopo = ucwords($request->escopo);
            $objE->save();
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Escopo ' . $request->escopo . ' inserido com sucesso!']);
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
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
        $objE = EscopoModel::findorfail($id);
        return view('admin.escopos.edit')->with(['escopo' => $objE]);
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
        if (Auth::id() === 1) {
            $request->validate([
                'escopo' => 'required|unique:escopos',
            ]);
            $objE = EscopoModel::findorfail($request->id);
            $objE->escopo = ucwords($request->escopo);
            $objE->save();
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Escopo ' . $request->escopo . ' editado com sucesso!']);
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
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
        $objE = EscopoModel::findOrFail($id);
        $data = $objE->escopo;
        $objE->delete();

        return redirect()->back()->withInput()->withErrors(['Escopo ' . $data . ' removido com sucesso!']);
    }
}
