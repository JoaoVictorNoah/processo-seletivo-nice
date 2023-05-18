<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
    /**
     * Aqui seria a classe User,
     * nela tem uma função $timestamps, ela está devido o Laravel por padrão,
     * sempre querer definir no banco de dados a hora e data,
     * mas com essa função = false, ele não vai fazer isso.
     */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    protected $fillable = [
        'nomeUsuario',
        'senhaUsuario',
    ];
    protected $hidden = [
        'senhaUsuario',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
?>