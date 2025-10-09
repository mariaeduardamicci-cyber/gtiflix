<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produtora;

class ProdutoraSeeder extends Seeder
{
    public function run(): void
    {
        Produtora::create(['nome' => 'Warner Bros', 'pais' => 'Estados Unidos']);
        Produtora::create(['nome' => 'Paramount Pictures', 'pais' => 'Estados Unidos']);
        Produtora::create(['nome' => 'Globo Filmes', 'pais' => 'Brasil']);
    }
}