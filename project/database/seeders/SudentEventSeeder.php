<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SudentEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\StudentEvent::factory(10)->create();

    }
}
