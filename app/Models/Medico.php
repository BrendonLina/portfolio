<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'nome',
        'idade',
        'cpf',
        'especialidade',
        'horarios_disponiveis',
        'password',
        'imagem',
        'status',
        'email'
    ];

    public function clinicas(){
        return $this->belongsToMany('App\Models\Clinica');
    }
}
