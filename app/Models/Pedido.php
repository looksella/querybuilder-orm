<?php

namespace App\Models;
// Importación del modelo Usuario para la relación
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    
    protected $table = "pedidos"; // Especifica la tabla asociada

    protected $fillable = [ // Campos asignables
        'producto',
        'cantidad',
        'total',
        'id_usuario',
    ];   
    
    public function usuario() // Relación con el modelo Usuario
    {
        return $this->belongsTo(Usuario::class, 'id_usuario'); // Un pedido pertenece a un usuario
    }
}