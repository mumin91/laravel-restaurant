<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(MenuTableSeeder::class);

    }
}

class MenuTableSeeder extends Seeder {
 
       public function run()
       {
         //delete users table records
         DB::table('menus')->delete();
         //insert some dummy records
         DB::table('menus')->insert(array(
             array('menu_name'=>'john','menu_desc'=>'john@clivern.com','menu_rating'=>'1','menu_image'=>'pizza.jpg', 'menu_price'=>50),
             array('menu_name'=>'mark','menu_desc'=>'mark@clivern.com','menu_rating'=>'2','menu_image'=>'pizza.jpg', 'menu_price'=>50),
             array('menu_name'=>'Karl','menu_desc'=>'karl@clivern.com','menu_rating'=>'3','menu_image'=>'pizza.jpg', 'menu_price'=>50),
             array('menu_name'=>'marl','menu_desc'=>'marl@clivern.com','menu_rating'=>'3','menu_image'=>'pizza.jpg', 'menu_price'=>50),
             array('menu_name'=>'mary','menu_desc'=>'mary@clivern.com','menu_rating'=>'3','menu_image'=>'pizza.jpg', 'menu_price'=>50),
            

          ));
       }
 
}