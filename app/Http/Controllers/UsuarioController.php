<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Usuario;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $this->usuario->nome = $request->nome;
        $this->usuario->email = $request->email;
        $this->usuario->senha = $request->senha;

        $this->usuario->save();
        unset($this->usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logar(Request $request)
    {
        $email = $request->email;
        $senha = $request->senha;

        $usuario = Usuario::where('email', $email)
            ->where('senha', $senha)
            ->first();

        if (isset($usuario)) {
            return $usuario->id;
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
