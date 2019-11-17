<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['tag' => 'Dodo', 'article_id' => rand(1, 10)],
            ['tag' => 'KL', 'article_id' => rand(1, 10)],
            ['tag' => 'KALS', 'article_id' => rand(1, 10)],
            ['tag' => 'IOD', 'article_id' => rand(1, 10)],
            ['tag' => 'JB', 'article_id' => rand(1, 10)],
            ['tag' => 'KIO', 'article_id' => rand(1, 10)],
            ['tag' => 'BAB', 'article_id' => rand(1, 10)],
            ['tag' => 'OE', 'article_id' => rand(1, 10)],
            ['tag' => 'JDD', 'article_id' => rand(1, 10)],
            ['tag' => 'LAKJD', 'article_id' => rand(1, 10)],
            ['tag' => 'NAU', 'article_id' => rand(1, 10)],
            ['tag' => 'BIUA', 'article_id' => rand(1, 10)],
            ['tag' => 'ODN', 'article_id' => rand(1, 10)],
            ['tag' => 'OI', 'article_id' => rand(1, 10)],
            ['tag' => 'NLASD', 'article_id' => rand(1, 10)],
            ['tag' => 'SAD', 'article_id' => rand(1, 10)],
            ['tag' => 'SF', 'article_id' => rand(1, 10)],
            ['tag' => 'AFE', 'article_id' => rand(1, 10)],
            ['tag' => 'GDF', 'article_id' => rand(1, 10)],
            ['tag' => 'VDF', 'article_id' => rand(1, 10)],
            ['tag' => 'DSGE', 'article_id' => rand(1, 10)],
            ['tag' => 'WED', 'article_id' => rand(1, 10)],
        ]);
    }
}
