<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\student::factory(10)->create();

    }
}
