<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Tag extends Model
{
    protected $fillable = [
        'tag', 'article_id'
    ];

    public function article(){
        return $this->belongTo(Article::class);
    }
}
