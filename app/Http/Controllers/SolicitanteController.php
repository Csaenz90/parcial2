<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Solicitante;

class SolicitanteController extends Controller
{
   public function index()
    {
        $solicitante = Solicitante::with('perfil')->get();
       //return $solicitante;
    return csrf_token();
    }

    public function store(Request $request)
    {
        $solicitante = new Solicitante;

        $solicitante->nombre   = $request->nombre;
        $solicitante->apellido = $request->apellido;
        $solicitante->email    = $request->email;

        $solicitante->save();

        $perfil = new Perfil;

        $perfil->direccion  = $request->direccion;
        $perfil->ciudad     = $request->ciudad;
        $perfil->profesion  = $request->profesion;
        $perfil->web        = $request->web;

        $solicitante->perfil()->save($perfil);

    }

     public function Update(Request $request,$id)
    {
        $solicitante = Solicitante::find($id);

        $solicitante->nombre   = $request->nombre;
        $solicitante->apellido = $request->apellido;
        $solicitante->email    = $request->email;

        $solicitante->update();

        $perfil['direccion']  = $request->direccion;
        $perfil['ciudad']     = $request->ciudad;
        $perfil['profesion']  = $request->profesion;
        $perfil['web']        = $request->web;

        $solicitante->perfil()->update($perfil);
    }


}
