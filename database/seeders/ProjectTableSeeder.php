<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Type;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $types = Type :: all(); 
       $projects =  Project :: factory() -> count(5) -> make();

       for ($i=0; $i < 5; $i++) { 

            $type = $types[$i];
            $project = $projects[$i];

            $project -> type_id = $type -> id;
            $project -> save();
       }


    }
}
