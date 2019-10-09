<?php


use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<9;$i++)
        {
            $customer=new Customer();
            $customer->name=Str::random(20);
            $customer->email=Str::random(30);
            $customer->phone=rand(1,1000000);
            $customer->address=Str::random(50);
            $customer->save();
        }

    }
}
