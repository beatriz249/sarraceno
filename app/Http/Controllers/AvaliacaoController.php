<?php

namespace App\Http\Controllers;
use App\Avaliacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $this->middleware('auth');
        $avaliacoes = Avaliacao::all();
        Return view('avaliacao')->with('avaliacoes', $avaliacoes);
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
    public function habilitar($id){
        $avaliacao = Avaliacao::find($id);
        $avaliacao->habilitar = 0;
        $avaliacao->save();
        return redirect('/avaliacao')->with('success', "Prato habilitado com sucesso!");
    }

    public function desabilitar($id){
        $avaliacao = Avaliacao::find($id);
        $avaliacao->habilitar = 1;
        $avaliacao->save();
        return redirect('/avaliacao')->with('success', "Prato desabilitado com sucesso!");
    }

}
