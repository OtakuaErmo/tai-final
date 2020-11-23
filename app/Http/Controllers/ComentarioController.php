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
        if (!empty($request->comentario) || !empty($request->image)) {
            $objC = new ComentarioModel();
            $objC->thread_id = $request->thread_id;
            $objC->coment_id = $request->coment_id;
            $objC->user_id = $request->user_id;
            $objC->image = $request->image;
            $objC->comentario = $request->comentario;
            $objC->save();
            //return redirect()->route('admin.escopo.create');
            return redirect()->back()->withInput()->withErrors(['Comentario adicionado com sucesso!']);
        } else {
            return redirect()->back()->withInput();
        }
        //$request->validate([
       //     'comentario' => 'required|max:255',
       // ]);

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
        $objC = ComentarioModel::where('thread_id', '=', $id)->paginate(10);
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
