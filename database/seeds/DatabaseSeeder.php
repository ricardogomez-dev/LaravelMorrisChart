<?php

use App\Item;
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
    	Item::truncate();

        factory(Item::class, 20)->create();
        $this->call(FinanzasTableSeeder::class);
    }
}
