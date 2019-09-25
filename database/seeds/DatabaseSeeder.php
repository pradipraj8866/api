<?php

use App\model\product;
use App\model\review;
use Illuminate\Database\Seeder;

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
        factory(App\model\product::class,50)->create();
     	factory(App\model\review::class,300)->create();
           
    }
}
