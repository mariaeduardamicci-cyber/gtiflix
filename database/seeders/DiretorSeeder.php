<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diretor;

class DiretorSeeder extends Seeder
{
    public function run(): void
    {
        Diretor::create(['nome' => 'Christopher Nolan', 'idade' => 53, 'nacionalidade_id' => 1]);
        Diretor::create(['nome' => 'Quentin Tarantino', 'idade' => 61, 'nacionalidade_id' => 1]);
        Diretor::create(['nome' => 'Fernando Meirelles', 'idade' => 68, 'nacionalidade_id' => 2]);
    }
}