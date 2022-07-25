<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('admin_menu')->delete();

        \DB::table('admin_menu')->insert(array (
            1 =>
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 19,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
            2 =>
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 20,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
            3 =>
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 21,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
            4 =>
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 22,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
            5 =>
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 23,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
            6 =>
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 24,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
            7 =>
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 14,
                'title' => '設定',
                'icon' => 'fa-gears',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2022-01-18 16:16:41',
                'updated_at' => '2022-02-03 17:46:24',
            ),
            10 =>
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 1,
                'title' => '顧客管理',
                'icon' => 'fa-bank',
                'uri' => '/customers',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
            11 =>
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 2,
                'title' => '従業員管理',
                'icon' => 'fa-bank',
                'uri' => '/employees',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 17:46:24',
            ),
        ));
    }
}
