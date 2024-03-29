<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'Clientes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'sobrenome',
        'tipo',
        'email',
        'dataDeNascimento',
    ];
}
