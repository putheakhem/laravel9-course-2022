<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Web Design',
            'img' => 'assets/images/s2.jpg',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.'
        ]);

        DB::table('services')->insert([
            'title' => 'Brand Building',
            'img' => 'assets/images/s2.jpg',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.'
        ]);

        DB::table('services')->insert([
            'title' => 'App Dev',
            'img' => 'assets/images/s2.jpg',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.'
        ]);

        DB::table('services')->insert([
            'title' => 'Clean Code',
            'img' => 'assets/images/s2.jpg',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.'
        ]);
        DB::table('services')->insert([
            'title' => 'Mobile apps',
            'img' => 'assets/images/s2.jpg',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.'
        ]);

        DB::table('services')->insert([
            'title' => 'Retina Ready',
            'img' => 'assets/images/s2.jpg',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.'
        ]);

    }
}
