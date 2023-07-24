<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                "title" => "Progetto 1",
                "project_leader" => "Mario Rossi",
                "starting_date" => "2023-07-02",
                "priority" => 1
            ],
            [
                "title" => "Progetto 2",
                "project_leader" => "Giovanni verdi",
                "starting_date" => "2021-07-02",
                "priority" => 5
            ],
            [
                "title" => "Progetto 3",
                "project_leader" => "Francesco Bianchi",
                "starting_date" => "2023-05-10",
                "priority" => 3
            ],
        ];

        foreach ($projects as $project) {

            Project :: create([
                "title" => $project['title'],
                "project_leader" => $project['project_leader'],
                "starting_date" => $project['starting_date'],
                "priority" => $project['priority']
            ]);
        }
    }
}
