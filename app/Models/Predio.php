<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = [
        'nombre_predio',
        'direccion',
        'cedula_cadastral',
        'municipio_id'
    ];

    public function licencias()
    {
        return $this->hasMany(Licencia::class);
    }

    public function solicitantes()
    {
        return $this->belongsToMany(Solicitante::class,'solicitudes')->withTimestamps();
    }
     public function imagenes()
    {
        return $this->morphMany('App\Models\Imagen', 'imageable');
    }

}
