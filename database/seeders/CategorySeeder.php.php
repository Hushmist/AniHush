<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder.php extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Аниме'
        ]);
        DB::table('categories')->insert([
            'title' => 'Манга'
        ]);
        DB::table('categories')->insert([
            'title' => 'Книги'
        ]);
    }
}
