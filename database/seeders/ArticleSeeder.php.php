<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder.php extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Самурай без меча',
            'text' => 'Эта книга воодушевляет быть лучшим менеджером. Главный герой исторический персонаж, который родился в бедной семье и уродливой внешностью, но несмотря на все трудности, он достиг наивысшего титула в своей стране',
            'categorie_id' => 1,
            'img' => '\stores\articles\10315367-kitami-masao-samuray-bez-mecha.jpg',
            'user_id' => 1,
            'access' => 2

        ]);
    }
}
