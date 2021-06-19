<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(UsersTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        


    DB::table('categories')->truncate(); 
        DB::table('categories')->insert(
         ['name' => 'Clothing'],
         );
         DB::table('categories')->insert(
             ['name' => 'Footwear'],
         );
         DB::table('categories')->insert(
             ['name' => 'Beauty'],
         );
         DB::table('categories')->insert(
             ['name' => 'Cars'],
         );
         DB::table('categories')->insert(
             ['name' => 'Mobile technology'],
         );
         DB::table('categories')->insert(
             ['name' => 'Animals'],
         );
         DB::table('categories')->insert(
             ['name' => 'Sports'],
         );  
        DB::table('categories')->insert(
          ['name' => 'Technology'],
        );   
        DB::table('categories')->insert(
             ['name' => 'Specify'],
         );


   
    	 
    }
}
