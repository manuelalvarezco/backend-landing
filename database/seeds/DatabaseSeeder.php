<?php

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
        $this->call(ImagesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        //$this->call(SectionsTableSeeder::class);
        //$this->call(ItemsTableSeeder::class);
        $this->call(TitulosTableSeeder::class);
    }
}
