<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LivrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'titulo' => 'O signo dos quatro',
            'autor' => 'Sir Arthur Connan Doyle',
            'descricao' => 'desc desc desc 1'
        ]);

        DB::table('livros')->insert([
            'titulo' => 'Os cães de Baskerville',
            'autor' => 'Sir Arthur Connan Doyle',
            'descricao' => 'desc 2'
        ]);

        DB::table('livros')->insert([
            'titulo' => 'Harry Potter e a pedra filosofal',
            'autor' => 'J. K. Rowling',
            'descricao' => 'desc bruxo'
        ]);
    }
}
