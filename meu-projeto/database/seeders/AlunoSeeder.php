<?php

namespace Database\Seeders;

use App\Models\Aluno1;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aluno1::create([
            'nome'=>'Oliver',
            'cpf'=>'1234980',
            'email'=>'olivere@gmail.com',
            'telefone'=>'4191999041',
        ]);
        Role::create([
            'titulo'=>'aluno',
        ]);

    }
}
