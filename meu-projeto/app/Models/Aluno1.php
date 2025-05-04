<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Aluno1 extends Model
{
    protected $table = 'alunos1';
    protected $fillable = ['nome','cpf', 'email','telefone'];

    public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}
