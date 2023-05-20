<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'clinicas',
    ];

    public function medicos(){
        return $this->belongsToMany('App\Models\Medico');
    }
}
