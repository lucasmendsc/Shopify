<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Favorito;

class ProdutoController extends Controller
{

    public function __construct()
    {
        $this->favorito = new Favorito();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->favorito->id_usuario = $request->idUsuario;
        $this->favorito->id_produto = $request->idProduto;

        $this->favorito->save();
        unset($this->favorito);
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
    public function destroy(Request $request)
    {
        $idUsuario = $request->idUsuario;
        $idProduto = $request->idProduto;

        $favorito = Favorito::where('id_usuario', $idUsuario)
            ->where('id_produto', $idProduto)
            ->first();

        $favorito->delete();
    }
}
