<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = Technology::factory()->count(12)->create();

        foreach($technologies as $technology){

            $projects = Project::inRandomOrder()->limit(rand(3, 5))->get();

            $technology->projects()->attach($projects);
        }
    }
}
