<?php

use Illuminate\Database\Seeder;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('stages')->insert(
    		array(
	    		array(
	    			'quantity_positions' => 3
	    		),
	    		array(
	    			'quantity_positions' => 4
	    		),
	    		array(
	    			'quantity_positions' => 5
	    		),
	    	)    		
    	);
        
    }
}
