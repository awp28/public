<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'id' => '18',
                'name' => json_encode(['oz' => 'Qashqadaryo viloyati', 'uz' => 'Қашқадарё вилояти',])
            ],

        ];
        DB::table('regions')->insert($regions);
    }
}
