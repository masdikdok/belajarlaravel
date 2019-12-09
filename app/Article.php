<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Article extends Model
{
    protected $fillable = [
        'judul'
    ];

    public function tags(){
        return $this->hasMany(Tag::class);
    }
}
