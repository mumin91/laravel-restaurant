<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = array('Bangla', 'Spanish', 'Thai', 'Drinks', 'Chinease');

        foreach ($categories as $category) {
        	  DB::table('categories')->insert(array('name' => $category));
        }
    }
}
