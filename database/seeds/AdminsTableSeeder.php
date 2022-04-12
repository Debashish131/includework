<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert(array(
            array(
                'name' => "Admin",
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ),
            array(
                'name' => "Super Admin",
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('123456'),
            )
        ));

    }
}
