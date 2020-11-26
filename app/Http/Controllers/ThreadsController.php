<?php

namespace App\Http\Controllers;

use App\AssuntoModel;
use App\ThreadsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ThreadsController extends Controller
{

    private $url = 'http://localhost:8002/api/threads';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response = Http::get($this->url);
        //dd($response->json());
        $objT = json_decode(json_encode($response->json()));
        //$objThreads = ThreadsModel::orderBy('id')->get();
        //return view('threadsList')->with(['threads' => $objThreads]);
        return view('threadsList')->with(['threads' => $objT]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $objA = AssuntoModel::where('id', '=', $id)->first();
        return view('threads.create')->with('assunto', $objA);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $response = Http::post($this->url . '/create/do', [
            'assunto_id' => $request->assunto_id,
            'user_id' => $request->user_id,
            'title' => $request->title,
            'image' => $request->image,
            'desc' => $request->desc,
        ]);
        return redirect()->action('ThreadsController@filterByAssunto', $request->assunto_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Http::get('http://localhost:8002/api/threads' . '/' . $id);
        $objT = json_decode(json_encode($response->json()));
        //dd($objT);
        return view('threadsList')->with(['threads' => $objT]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = Http::get($this->url . '/' . $id);
        //dd($response->json());
        $objT = json_decode(json_encode($response->json()));
        //$objThreads = ThreadsModel::orderBy('id')->get();
        //return view('threadsList')->with(['threads' => $objThreads]);
        $objA = AssuntoModel::orderBy('id')->get();
        return view('threads.edit')->with(['thread' => $objT, 'assuntos' => $objA]);
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
        $response = Http::put($this->url . '/update/do/' . $request->id, [
            'assunto_id' => $request->assunto_id,
            'user_id' => $request->user_id,
            'title' => $request->title,
            'image' => $request->image,
            'desc' => $request->desc,
        ]);
        return redirect()->action('ThreadsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::delete($this->url . '/destroy' . '/' . $id);
        return redirect()->action('ThreadsController@index'); //rever isso

    }

    public function search(Request $request)
    {
        $response = Http::post($this->url . '/search/do', [
            'title' => $request->title,
        ]);

        $objT = json_decode(json_encode($response->json()));

        return view('threadsList')->with(['threads' => $objT]);
    }

    public function filterByAssunto($id)
    {

        $response = Http::get($this->url . '/filter' . '/' . $id);

        $objT = json_decode(json_encode($response->json()));
        //dd($objT);
        if (!empty($objT)) {
            $objA = AssuntoModel::where('id', '=', $objT[0]->assunto_id)->first();

            return view('threadsList')->with(['threads' => $objT, 'assunto' => $objA]);
        } else {
            return redirect()->action('ThreadsController@create', $id)->withInput()->withErrors('Este assunto ainda não possui conversas. Inicie uma nova Thread!');
        }
    }

    public function filterByUser($id)
    {

        $response = Http::get($this->url . '/user/filter' . '/' . $id);

        $objT = json_decode(json_encode($response->json()));

        return view('threadsList')->with(['threads' => $objT]);
    }
}
