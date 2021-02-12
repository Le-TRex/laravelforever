<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DuckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ducks')->insert([
            'duckName' => 'Jean-Michel',
            'duckBreed' => 'Canard de Pékin'
        ]);

        DB::table('ducks')->insert([
            'duckName' => 'René',
            'duckBreed' => 'Khaki Campbell'
        ]);

        DB::table('ducks')->insert([
            'duckName' => 'Marcel',
            'duckBreed' => 'Arlequin Gallois'
        ]);
    }
}
