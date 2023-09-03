<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'nome',
        'email',
        'cpf',
        'clinicas',
        'ano_de_nascimento',
        'telefone',
        'data_consulta',
        'medicos'
    ];

    protected $dates = [
        'ano_de_nascimento',
        'data_consulta'
    ];

    public function medicos(){
        return $this->belongsToMany('App\Models\Medico');
    }
}
