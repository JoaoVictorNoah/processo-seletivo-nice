<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    /**
     * Aqui seria a classe Produtor,
     * nela tem uma função $timestamps, ela está devido o Laravel por padrão,
     * sempre querer definir no banco de dados a hora e data,
     * mas com essa função = false, ele não vai fazer isso.
     */
class Produtor extends Model
{
    public $timestamps = false;
    use HasFactory;
}
?>