<?php

namespace App\Http\Controllers;
use App\Prato;
use Illuminate\Http\Request;

class PratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pratos = Prato::all();
        Return view('pratos')->with('pratos', $pratos);
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
        $this->validate($request,[
            'nomedoprato'=> 'required',
            'Descricao' => 'required',
            'Valor' => 'required',
            "Status" => 'required',
        ]);

        $pratos = new Prato;

        $pratos->Nome = $request->input('nomedoprato');
        $pratos->Descricao = $request->input('Descricao');
        $pratos->Preco = $request->input('Valor');
        $pratos->Status = $request->input('Status');

        $pratos->save();

        return redirect('/pratos')->with('success', 'Prato adicionado com sucesso!');

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
        $pratos = Prato::find($id);
        if( $request->input('nomedoprato')!=""){
           $pratos->Nome = $request->input('nomedoprato');
        }
        if($request->input('Descricao')!=""){
           $pratos->Descricao = $request->input('Descricao');
        }
        if($request->input('Valor')!=""){
           $pratos->Preco = $request->input('Valor'); 
        }
        if($request->input('Status')!=""){
           $pratos->Status = $request->input('Status');
        }
       
        
        $pratos->save();

        return redirect('/pratos')->with('success', "Prato editado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pratos = Prato::find($id);
        $pratos->DELETE();
        return redirect('/pratos')->with('success', "Prato excluído com sucesso!");

    }

    public function habilitar($id){
        $pratos = Prato::find($id);
        $pratos->Status = 0;
        $pratos->save();
        return redirect('/pratos')->with('success', "Prato habilitado com sucesso!");
    }

    public function desabilitar($id){
        $pratos = Prato::find($id);
        $pratos->Status = 1;
        $pratos->save();
        return redirect('/pratos')->with('success', "Prato desabilitado com sucesso!");
    }

}
