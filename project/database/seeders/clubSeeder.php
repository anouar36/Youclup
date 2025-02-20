<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class clubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\club::factory(10)->create();

    }
}
