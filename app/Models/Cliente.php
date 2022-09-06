<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table ="clientes";

    protected $fillable = [ 
        "nombre",
        "apellidos",
        "documento",
        "direccion",
        "telefono1",
        "telefono2",
        "correo",
        "documento_id"
    ];

    public function tipo_documento() {
        return $this->belongsTo(TipoDocumento::class);
    }
}
