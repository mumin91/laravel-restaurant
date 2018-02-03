<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       

        
        	  DB::table('admins')->insert(array('name' => "admin", 'email' => "r.muminur@gmail.com", 'password' => md5("123456"), 'role' => "Super Admin"));
        
    }
}
