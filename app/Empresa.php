<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'Empresa';
    protected $fillable = ['nome', 'cnpj', 'nome_fantasia', 'contato', 'email', 'telefone'];
}
