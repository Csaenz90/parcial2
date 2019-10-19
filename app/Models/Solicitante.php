<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = 'solicitantes';

    protected $fillable = [
        'nombre',
        'apellido',
        'email'
    ];

    public function perfil()
    {
        return $this->hasOne(Perfil::class);
    }

    public function predios()
    {
        return $this->belongsToMany(Predio::class,'solicitudes')->withTimestamps();
    }

     public function imagenes()
    {
        return $this->morphMany('App\Models\Imagen', 'imageable');
    }


}
