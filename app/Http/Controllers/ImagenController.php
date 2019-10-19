<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use App\Models\Predio;


class ImagenController extends Controller
{
      public function index()
    {
        $predio = Predio::with('imagenes')->get();
        return $predio;
        //return csrf_token();
    }

    public function store(Request $request)
    {
        
    
      $predio = Predio::find($request->codigo);
       

       $imagen  = new Imagen;
       $imagen2 = new Imagen;

       $imagen->url   = $request->url;
       $imagen2->url  = $request->url2;
       
        
        
        $predio->imagenes()->saveMany([$imagen,$imagen2]);

    }

     public function Update(Request $request,$id)
     {

      $predio = Predio::find($id);

      $predio->nombre_predio    = $request->nombre_predio;
      $predio->direccion        = $request->direccion;
      $predio->cedula_cadastral = $request->cedula_cadastral;

      $predio->update();

      $imagen = Imagen::find($request->codigoimagen);

      $imagen->url  = $request->url;
      
      $imagen->update();

    }   


    public function destroy($id)
     {
     
     $imagen = Imagen::find($id);
     
     $imagen->delete();

     }
  }

