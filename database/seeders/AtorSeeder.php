<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder

{
   public function run(): void 
    {
    DB::table('atores')->insert(
        ['nome' => "Wagner Moura",
        'descricao'=> "Ator foda brasileiro",
        'nacionalidade_id' => 1],
    
        ['nome' => "Megan Fox",
        'descricao'=> "Muito lembrada por atuar em Transformers",
        'nacionalidade_id' => 2],
    );
}
}
