<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno1;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['titulo'];

    public function alunos(){
        return $this->belongsToMany(Aluno1::class)->withTimestamps();++--/*











        ++++++++++++++++++
    }
}
