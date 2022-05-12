<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(array(
           'title' => 'IT Terbaik',
           'content' => 'orang paling terkenal didunia IT',
           'image' => 'poto.jpg',
           'user_id' => 1, 
           'category_id' =>1
        ));

        Article::create(array(
            'title' => 'IT Indonesia',
            'content' => 'orang paling terkenal diindonesia bidang IT',
            'image' => 'poto.jpg',
            'user_id' => 2, 
            'category_id' => 2
         ));

         Article::create(array(
            'title' => 'IT Terbaik',
            'content' => 'orang paling terkenal didunia IT',
            'image' => 'poto.jpg',
            'user_id' => 3, 
            'category_id' =>3
         ));
 
         Article::create(array(
             'title' => 'IT Indonesia',
             'content' => 'orang paling terkenal diindonesia bidang IT',
             'image' => 'poto.jpg',
             'user_id' => 4, 
             'category_id' => 4
          ));

          Article::create(array(
            'title' => 'IT Terbaik',
            'content' => 'orang paling terkenal didunia IT',
            'image' => 'poto.jpg',
            'user_id' => 5, 
            'category_id' =>5
         ));
 
         Article::create(array(
             'title' => 'IT Indonesia',
             'content' => 'orang paling terkenal diindonesia bidang IT',
             'image' => 'poto.jpg',
             'user_id' => 6, 
             'category_id' => 6
          ));

          Article::create(array(
            'title' => 'IT Terbaik',
            'content' => 'orang paling terkenal didunia IT',
            'image' => 'poto.jpg',
            'user_id' => 7, 
            'category_id' =>7
         ));
 
         Article::create(array(
             'title' => 'IT Indonesia',
             'content' => 'orang paling terkenal diindonesia bidang IT',
             'image' => 'poto.jpg',
             'user_id' => 8, 
             'category_id' => 8
          ));

          Article::create(array(
            'title' => 'IT Terbaik',
            'content' => 'orang paling terkenal didunia IT',
            'image' => 'poto.jpg',
            'user_id' => 9, 
            'category_id' =>9
         ));
 
         Article::create(array(
             'title' => 'IT Indonesia',
             'content' => 'orang paling terkenal diindonesia bidang IT',
             'image' => 'poto.jpg',
             'user_id' => 10, 
             'category_id' => 10
          ));
    }
}
