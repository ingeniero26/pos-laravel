<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table ="tipo_documentos";

    protected $fillable = [ 
        "descripcion"
    ];

    public function clientes() {
        return $this->hasMany(Cliente::class);
    }

    public function proveedores() {
        return $this->hasMany(Proveedor::class);
    }
}
