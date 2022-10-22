<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('produto.index', ['produtos' => Produto::all()]); //Recebe parametro (localização do arquivo, array com dados injetados nesta página)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('al');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
  public function store(Request $request)
    {
        $produto = new Produto();
        $produto->departamento = $request->departamento;
        $produto->marca = $request->marca;
        $produto->preco = $request->preco;
        $produto->url_imagem = $request->preco;
        if($produto->Save()){
            return redirect('produto');
        }
        else{
            return "ERRO AO SALVAR!\n";
        }
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        
         return view('produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('produto.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
       
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        return $produto->delete();
    }


}
