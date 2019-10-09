<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the applicati on's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CustomersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(BillsTableSeeder::class);
    }
}
