<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create([

        // ]);

        DB::table('roles')->insert([
                'name'       => 'super-admin',
                'guard_name' => 'web',
            ]);

        DB::table('roles')->insert([
                'name'       => 'user',
                'guard_name' => 'web',
            ]);
    }
}
