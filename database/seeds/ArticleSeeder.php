<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15 ; $i++) { 
            
            $article = new Article();
            $article->image = $faker->imageUrl(640, 480, 'Article', true);
            $article->title = $faker->title();
            $article->body = $faker->text();
            $article->autor = $faker->name();
            $article->save();
        }
        
    }
}
