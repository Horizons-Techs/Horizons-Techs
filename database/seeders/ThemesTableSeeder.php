<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insert dummy themes into the 'themes' table
        DB::table('themes')->insert([
            [
                'name' => 'Technology',
                'description' => 'Articles related to the latest technology trends.',
                'manager_id' => 1, // Assuming a user with ID 1 exists
                "image" => "https://static.vecteezy.com/system/resources/previews/008/857/678/non_2x/data-center-network-concept-banner-isometric-style-vector.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Artificiel Inteligent',
                "image" => "images/1737052807.jpg",
                'description' => 'Articles about Artificiel Inteligent',
                'manager_id' => 2, // Assuming a user with ID 2 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Iot : Internet of thins',
                "image" => "https://static.vecteezy.com/system/resources/previews/002/062/136/non_2x/server-room-isometric-cloud-storage-data-data-center-big-data-processing-and-computing-technology-illustration-vector.jpg",

                'description' => 'Articles about Iot : Internet of thins',
                'manager_id' => 3, // Assuming a user with ID 3 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Programming Language C++',
                "image" => "images/1737052807.jpg",

                'description' => 'Articles about Programming Language C++',
                'manager_id' => 4, // Assuming a user with ID 4 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DevOPS and Cloud',
                "image" => "images/1737052807.jpg",
                'description' => 'Articles about DevOPS and Cloud',
                'manager_id' => 4, // Assuming a user with ID 4 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Computer Science',
                "image" => "images/1737052807.jpg",
                'description' => 'Articles about Computer Science.',
                'manager_id' => 4, // Assuming a user with ID 4 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Github Tips and Tricks',
                'description' => 'Articles about Github Tips and Tricks',
                "image" => "images/1737052807.jpg",
                'manager_id' => 4, // Assuming a user with ID 4 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hello world',
                'description' => ' Some Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long Text Some Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long TextSome Long Text',
                "image" => "images/1737052807.jpg",
                'manager_id' => 4, // Assuming a user with ID 4 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        $this->command->info('Themes table seeded successfully!');
    }
}