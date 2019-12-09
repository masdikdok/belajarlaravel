<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Article;
use App\Tag;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'tag' => $faker->sentence,
        'article_id' => factory(Article::class)->create()->id
    ];
});
