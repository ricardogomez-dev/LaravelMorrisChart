<?php

use App\Finanza;
use Illuminate\Database\Seeder;

class FinanzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Finanza::truncate();

        Finanza::create([
        	'ingreso' => 1000,
            'gasto' => 200
        ]);
        Finanza::create([
        	'ingreso' => 1400,
            'gasto' => 700
        ]);
        Finanza::create([
        	'ingreso' => 2300,
            'gasto' => 850
        ]);
        Finanza::create([
        	'ingreso' => 2800,
            'gasto' => 1200
        ]);
        Finanza::create([
        	'ingreso' => 3300,
            'gasto' => 1700
        ]);
        Finanza::create([
        	'ingreso' => 4200,
            'gasto' => 2000
        ]);
    }
}
