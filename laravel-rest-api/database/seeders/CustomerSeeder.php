<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
        ->count(25)
        ->hasInvoices(10)
        ->create();

        //Customer::factory()
       // ->count(100)
      //  ->hasInvoices(5)
      //  ->create();
    }
}
