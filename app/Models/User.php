<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable; // Añade las funcionalidades de fábrica y notificaciones

    protected $fillable = [ // Campos asignables
        'name',
        'email',
        'password',
    ];

    protected $hidden = [ // Campos ocultos en la serialización
        'password',
        'remember_token',
    ];

    protected function casts(): array // Tipos de datos de los atributos
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
