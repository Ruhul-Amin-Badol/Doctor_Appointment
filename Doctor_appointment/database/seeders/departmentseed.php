<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class department extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'dr.Ruhul'
            ],

            [
                'id' => 2,
                'name' => 'dr.hambarez'
            ],
            [
                'id' => 3,
                'name' => 'dr.sadik'
            ],
            [
                'id' => 4,
                'name' => 'dr.bellal'
            ],
            [
                'id' => 5,
                'name' => 'dr.sarmin ara'
            ],

        ];

        DB::table('departments')->insert($data);
    }
}
