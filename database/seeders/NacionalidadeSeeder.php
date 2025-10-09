<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nacionalidade;

class NacionalidadeSeeder extends Seeder
{
    public function run(): void
    {
        Nacionalidade::create(['nome' => 'Americana', 'pais' => 'Estados Unidos']);
        Nacionalidade::create(['nome' => 'Brasileira', 'pais' => 'Brasil']);
        Nacionalidade::create(['nome' => 'Britânica', 'pais' => 'Reino Unido']);
    }
}