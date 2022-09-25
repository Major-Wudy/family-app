<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role' => 'mom',
                'user_id' => 2,
            ],
            [
                'role' => 'dad',
                'user_id' => 1,
            ],
            [
                'role' => 'admin',
                'user_id' => 1,
            ],
            [
                'role' => 'uncle',
                'user_id' => 3,
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
