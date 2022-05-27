<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Consulta extends Model
{
    use HasFactory,SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id',
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

    public function storeConsulta($data)
    {
        Consulta::create([
            'id' => Str::uuid(),
            'nome' => $data['nome'],
            'telefone' => $data['telefone'],
            'endereco' => $data['endereco'],
            'observacao' => $data['observacao'],
            'data_consulta' => $data['data_consulta'],
            'dentista_responsavel' => $data['dentista_responsavel'],
        ]);
    }

    public function allPaginate()
    {
        return Consulta::orderBy('data_consulta' , 'desc')->paginate(8);
    }

    public function updateConsulta($data)
    {
        Consulta::where('id', $data['id'])
        ->update([
            'nome' => $data['nome'],
            'telefone' => $data['telefone'],
            'endereco' => $data['endereco'],
            'observacao' => $data['observacao'],
            'data_consulta' => $data['data_consulta'],
            'dentista_responsavel' => $data['dentista_responsavel'],
        ]);
    }

    public function deleteConsulta($id)
    {
        Consulta::where('id', $id)->delete();
    }

    
}
