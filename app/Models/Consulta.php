<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nome',
        'telefone',
        'endereco',
        'observacao',
        'data_consulta',
        'dentista_responsavel',
    ];

    protected $casts = [
        'id' => 'string',
        'nome' => 'string',
        'telefone' => 'string',
        'endereco' => 'string',
        'observacao' => 'string',
        'data_consulta' => 'string',
        'dentista_responsavel' => 'string',
    ];
}
