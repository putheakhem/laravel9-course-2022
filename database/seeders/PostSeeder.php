<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->insert([
            'author' => 'Puthea',
            'title' => "Upgrade Laravel 8 to 9",
            'content' => "This command publishes the authentication views, routes",
            'slug' => 'upgrade-larave-8-to-9'
        ]);

        DB::table('posts')->insert([
            'author' => 'Puthea',
            'title' => "Upgrade Laravel 9 to 10",
            'content' => "This command publishes the authentication views, routes, controllers, and other resources to your application. Laravel Breeze publishes all of its code to your application so that you have full control and visibility over its features and implementation.",
            'slug' => 'upgrade-larave-8-to-9'
        ]);

    }
}
