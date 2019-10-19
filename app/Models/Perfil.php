<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';

    protected $fillable = [
        'direccion',
        'ciudad',
        'profesion',
        'web',
        'solicitante_id'
    ];

    public function solicitante()
    {
        return $this->belongsTo(Solicitante::class);
    }

}
