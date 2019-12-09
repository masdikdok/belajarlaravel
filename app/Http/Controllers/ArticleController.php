<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Route;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with('tags')->paginate(10);

        return view('article/index', ['articles' => $articles]);
    }

    public function checkAction(){

        return Route::currentRouteAction();
    }
}
