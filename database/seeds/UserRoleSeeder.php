<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users_role')->insert([
            'name' => 'admin',
        ]);

        DB::table('users_role')->insert([
            'name' => 'manager',
        ]);
    }
}
