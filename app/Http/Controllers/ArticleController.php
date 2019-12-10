<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Article;
use Route;

class ArticleController extends Controller
{
    public function index(Request $request){
        $page = $request->has('page') ? $request->page : 1;
        $articles = Cache::remember('users_page_' . $page, 10000, function () {
            return Article::with('tags')->paginate(10);
        });

        // dd($articles);

        // $articles = Article::with('tags')->paginate(10);

        return view('article/index', ['articles' => $articles]);
    }

    public function checkAction(){

        return Route::currentRouteAction();
    }
}
