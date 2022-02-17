<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'id' => '1',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Qarshi shahar',   'uz' => 'Қарши шаҳар'])
            ],
            [
                'id' => '2',
                'region_id' => '18',
                'name' =>json_encode(['oz' => 'G’uzor tumani',  'uz' => 'Ғузор тумани'])
            ],
            [
                'id' => '3',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Qarshi tumani', 'uz' => 'Қарши тумани'])
            ],
            [
                'id' => '4',
                'region_id' => '18',
                'name' => json_encode([ 'oz' => 'Kasbi tumani',  'uz' => 'Касби тумани'])
            ],
            [
                'id' => '5',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Koson tumani',  'uz' => 'Косон тумани'])
            ],
            [
                'id' => '6',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Kitob tumani',  'uz' => 'Китоб тумани'])
            ],
            [
                'id' => '7',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Mirishkor tumani',  'uz' => 'Миришкор тумани'])
            ],
            [
                'id' => '8',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Muborak tumani',     'uz' => 'Муборак тумани'])
            ],
            [
                'id' => '9',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Nishon tumani',      'uz' => 'Нишон тумани'])
            ],
            [
                'id' => '10',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Chiroqchi tumani',   'uz' => 'Чироқчи тумани'])
            ],
            [
                'id' => '11',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Shaxrisabz tumani',  'uz' => 'Шахрисабз тумани'])
            ],
            [
                'id' => '12',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Qamashi tumani',     'uz' => 'Қамаши тумани'])
            ],
            [
                'id' => '13',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Dexqonobod tumani',  'uz' => 'Дехқонобод тумани'])
            ],
            [
                'id' => '14',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Yakkabog’ tumani',   'uz' => 'Яккабоғ тумани'])
            ],
            [
                'id' => '15',
                'region_id' => '18',
                'name' => json_encode(['oz' => 'Shaxrisabz shahar',  'uz' => 'Шахрисабз шаҳар'])
            ],
            [
                'id' => '16',
                'region_id' => null,
                'name' => json_encode(['oz' => '“Ishga Marhamat” Monomarkaz',  'uz' => '“Ишга Марҳамат” Мономарказ'])
            ],
            [
                'id' => '17',
                'region_id' => null,
                'name' => json_encode(['oz' => 'KOICA',  'uz' => 'KOICA'])
            ],
        ];
        DB::table('cities')->insert($cities);
    }
}
