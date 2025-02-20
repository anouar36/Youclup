<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\admin::factory(10)->create();


    }
}
