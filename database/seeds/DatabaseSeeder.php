<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'admin2',
            'email' => 'abcd@gmail.com',
            'password' => bcrypt('123456'),
            
        ]);
    }
}
