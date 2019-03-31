<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
<<<<<<< HEAD
            'name' => "administrator",
            'email' => 'admin@jptv.com',
            'password' => bcrypt('adminjptv1234'),
=======
            'name' => 'Admin',
            'email' => 'phjptv@gmail.com',
            'password' => bcrypt('adminphjptv'),
>>>>>>> ea602aea38e1053bac81d35122d04ba10e4ce320
        ]);
    }
}
