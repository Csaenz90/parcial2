<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Predio;
use App\Models\Licencia;


class PredioController extends Controller
{
     public function index()
    {
        $predio = Predio::with('licencias')->get();
        return $predio;
        //return csrf_token();
    }

    public function store(Request $request)
    {
        $predio = new Predio;

        $predio->nombre_predio    = $request->nombre_predio;
        $predio->direccion        = $request->direccion;
        $predio->cedula_cadastral = $request->cedula_cadastral;

        $predio->save();

        $licencia = new Licencia;
        $licencia2 = new Licencia;

        $licencia->tipo_licencia  = $request->tipo_licencia;
        $licencia->valor_licencia = $request->valor_licencia;
        
        $licencia2->tipo_licencia  = $request->tipo_licencia2;
        $licencia2->valor_licencia = $request->valor_licencia2;
        
        

        $predio->licencias()->saveMany([$licencia,$licencia2]);

    }

     public function Update(Request $request,$id)
     {

      $predio = Predio::find($id);

      $predio->nombre_predio    = $request->nombre_predio;
      $predio->direccion        = $request->direccion;
      $predio->cedula_cadastral = $request->cedula_cadastral;

      $predio->update();

      $licencia = Licencia::find($request->codigolicencia);

      $licencia->tipo_licencia  = $request->tipo_licencia;
      $licencia->valor_licencia = $request->valor_licencia;
        

      $licencia->update();

    }   
  }

