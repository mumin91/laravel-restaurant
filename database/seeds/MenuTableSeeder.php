<?php

use Illuminate\Database\Seeder;
class MenuTableSeeder extends Seeder {
 
       public function run()
       {
         //delete users table records
         DB::table('menus')->delete();
         //insert some dummy records
         for ($i=0; $i < 10; $i++){ 
            DB::table('menus')->insert(array(
             array('name'=>'john','description'=>'john@clivern.com', 'category'=>'Drink', 'image'=>'pizza.jpg', 'price'=>50),
             
            

          ));
       }
         }
         
 
}