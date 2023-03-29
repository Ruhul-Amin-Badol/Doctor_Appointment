<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departmentseeder extends Seeder
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
                'name' => 'Allergy and Immunology'
            ],

            [
                'id' => 2,
                'name' => 'Neurology'
            ],
            [
                'id' => 3,
                'name' => 'Surgery'
            ],
            [
                'id' => 4,
                'name' => 'Urology'
            ],
            [
                'id' => 5,
                'name' => 'medicine'
            ],

        ];

        DB::table('departments')->insert($data);
    }
}
