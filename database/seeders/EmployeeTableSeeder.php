<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('employees')->delete();

        \DB::table('employees')->insert(array (
            1 =>
            array (
                'id' => 2,
                'family_name' => '廣田',
                'given_name' => '朋哉',
                'family_name_kana' => 'ヒロタ',
                'given_name_kana' => 'トモヤ',
                'age' => '23',
                'gender_id' => 0,
                'move_start' => '2022-02-03 17:46:24',
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
        ));
    }
}

