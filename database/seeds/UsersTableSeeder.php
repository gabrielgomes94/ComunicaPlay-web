<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
        	array(
        		'name' => 'Gabriel',
        		'lastname' => 'Gomes', 
        		'email' => 'gabrielgomesch@gmail.com',	
        		'password' => bcrypt('123456'),
        		'gender' => 'male',
        		'type' => 'admin'
        	)
        ));
    }
}
