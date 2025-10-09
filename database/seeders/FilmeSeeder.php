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
            'ano' => 2010,
            'diretor_id' => 1,
            'produtora_id' => 1
        ]);

        Filme::create([
            'titulo' => 'Pulp Fiction',
            'ano' => 1994,
            'diretor_id' => 2,
            'produtora_id' => 2
        ]);

        Filme::create([
            'titulo' => 'Cidade de Deus',
            'ano' => 2002,
            'diretor_id' => 3,
            'produtora_id' => 3
        ]);
    }
}