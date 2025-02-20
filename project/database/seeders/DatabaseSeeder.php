<?php

namespace Database\Seeders;

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
        $user        =\App\Models\User::factory(10)->create();
        $Student     =\App\Models\Student::factory(10)->create();
        $admin       =\App\Models\admin::factory(10)->create();
        $Event       =\App\Models\Event::factory(10)->create();
        $StudentEvent=\App\Models\StudentEvent::factory(10)->create();
        $StudentClub =\App\Models\StudentClub::factory(10)->create();
        $club        = \App\Models\club::factory(10)->create();

        
        \App\Models\Student::factory()->create([
            'user_id' => $user->id, 
        ]);
        
        \App\Models\admin::factory()->create([
            'user_id' => $user->id, 
        ]);

        \App\Models\club::factory()->create([
            'admin_id' => $admin->id, 
        ]);

        \App\Models\Event::factory()->create([
            'admin_id' => $admin->id, 
        ]);

        \App\Models\StudentClub::factory()->create([
            'etudent_id' => $Student->id, 
            'Club_id' => $club->id, 
        ]);

        \App\Models\StudentClub::factory()->create([
            'etudent_id' => $Student->id, 
            'event_id' => $Event->id, 
        ]);


    }
}
