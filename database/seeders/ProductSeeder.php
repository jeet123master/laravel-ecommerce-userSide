<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
        	'name' => 'iPhone',
        	'price' => '100000',
        	'description' => "16GB120GB",
        	'category' => 'mobile',
        	'gallery' => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gsmarena.com%2Fapple_iphone_12_pro_max-pictures-10237.php&psig=AOvVaw10LiyP1rkokj-Pg9e69l4U&ust=1612504512173000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLjAqMfFz-4CFQAAAAAdAAAAABAD"
        	],
        	[
        	'name' => 'samsung',
        	'price' => '20000',
        	'description' => "8GB120GB",
        	'category' => 'mobile',
        	'gallery' => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gsmarena.com%2Fapple_iphone_12_pro_max-pictures-10237.php&psig=AOvVaw10LiyP1rkokj-Pg9e69l4U&ust=1612504512173000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLjAqMfFz-4CFQAAAAAdAAAAABAD"
        	],
            [
            'name' => 'samsung',
            'price' => '30000',
            'description' => "8GB120GB",
            'category' => 'mobile',
            'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReDWT6KjH7X-W000dgSlkykT38rShWdxC67Q&usqp=CAU"
            ]
        ]);
    }
}
