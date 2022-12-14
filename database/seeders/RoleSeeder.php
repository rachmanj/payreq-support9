<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'user',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name' => 'superadmin',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name' => 'acc_cashier',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name' => 'dnc_staff',
            'guard_name' => 'web',
        ]);
    }
}
