<?php

use Illuminate\Database\Seeder;

class ItemsTableSeederder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Item::class, 20)->create();
        
    }
}
