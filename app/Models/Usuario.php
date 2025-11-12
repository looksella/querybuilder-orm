<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios"; // Especifica la tabla asociada

    protected $fillable = [ 
        'nombre',
        'email',
        'telefono',
    ];   
    
    public function pedidos() // Relación con el modelo Pedido
    {
        return $this->hasMany(Pedido::class, 'id_usuario'); // Un usuario tiene muchos pedidos
    }
}
