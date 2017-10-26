<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class prouctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$i = 1;
    	while ($i < 7){
    		DB::table('Products')->insert([
	        	'imgpath' => '/img/product'.$i.'.jpg',
	        	'name' => str_random(10),
	        	'description' => str_random(30),
	        	'category_id' => $i,
	        	'barcode' => str_random(10),
	        	'prise' => rand(100,500),
	        	'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
        	]);
    		$i++;
    	}
    }
}
