<?php

use App\Bill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

            $bill = new Bill();
            $bill->customer_id = 1;
            $bill->total = rand(1,10000000);
            $bill->date = Str::random(10);
            $bill->save();
            $bill->products()->attach([1,2,3,4,5,6,7]);

    }
}
