<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{
    use HasFactory,SoftDeletes;

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

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function allConsulta()
    {
        return Consulta::all();
    }

    public function allPaginate()
    {
        return Consulta::orderBy('data_consulta' , 'desc')->paginate(8);
    }

    
}
