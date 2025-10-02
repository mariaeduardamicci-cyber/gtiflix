<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    public function run(): void
    {
    DB::table('generos')->insert([
        ['nome' => "Terror"],
        ['nome' => "Romance"],
        ['nome' => "Suspense"],
        ['nome' => "Ficção Científica"],
        ['nome' => "Drama"],
        ['nome' => "Comédia"],
    
    ]);
    }    
}
