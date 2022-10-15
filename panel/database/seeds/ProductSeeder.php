<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        		array("name"=>"fastrack",
        			"image"=>"A",
        			"description"=>"good",
        			"features"=>"nice"
        				),
        		array("name"=>"titan",
        			"image"=>"B",
        			"description"=>"better",
        			"features"=>"good"
        				),
        		array("name"=>"noise",
        			"image"=>"C",
        			"description"=>"awesome",
        			"features"=>"fabulous"
        				),
        		array("name"=>"apple",
        			"image"=>"D",
        			"description"=>"fabb",
        			"features"=>"nice"
        				),
        		array("name"=>"mi",
        			"image"=>"E",
        			"description"=>"super",
        			"features"=>"good"
        				),
        );

        Product::insert($data);
        
    }
}
