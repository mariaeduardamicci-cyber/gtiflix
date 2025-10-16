<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Filme;

class FilmeSeeder extends Seeder
{
    public function run(): void
    {
        Filme::create([
            'titulo' => 'Inception',
            'descricao'=> "filme de Ficção",
            'ano' => 2010,
            'diretor_id' => 1,
            'produtora_id' => 1
        ]);

        Filme::create([
            'titulo' => 'Pulp Fiction',
            'descricao'=> "filme de Ação",
            'ano' => 1994,
            'diretor_id' => 2,
            'produtora_id' => 2
        ]);

        Filme::create([
            'titulo' => 'Cidade de Deus',
            'descricao'=> "filme de Ficção",
            'ano' => 2002,
            'diretor_id' => 3,
            'produtora_id' => 3
        ]);
    }
}