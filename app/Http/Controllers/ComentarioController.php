<?php

namespace App\Http\Controllers;

use App\ComentarioModel;
use App\ThreadsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objC = ComentarioModel::orderBy('id')->get();
        return view('threadComents')->with('comentarios', $objC);
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
        //$response = Http::get('http://localhost:8002/api/threads'.'/'.$id);
       // $objT = json_decode(json_encode($response->json()));
        $objT = ThreadsModel::where('id', '=', $id)->first();
        $objC = ComentarioModel::where('thread_id', '=', $id)->get();
        return view('threadComents')->with(['thread' => $objT, 'comentarios' => $objC]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
