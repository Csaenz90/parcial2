<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitante;
use App\Models\Predio;

class SolicitudController extends Controller
{
      public function index()
    {
        $solicitante = Solicitante::with('predios')->get();
       return $solicitante;
     //return csrf_token();
    }

    public function store(Request $request)
    {
      $solicitante = Solicitante::find($request->codigo);
      $solicitante->predios()->attach([$request->codigopredio]);     
    }

     public function Update(Request $request,$id)
     {
      $solicitante = Solicitante::find($id);
      $solicitante->predios()->sync([$request->codigopredio]);

     }
  }

