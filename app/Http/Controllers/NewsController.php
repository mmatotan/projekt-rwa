<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use DB;

class NewsController extends Controller
{
    public function show(){
        $articles = news::paginate(10);
           
        return view('novosti', [
            'articles' => $articles
        ]);
    }

    public function showSpecific($slug){
        $article = DB::table('news')->where('slug', $slug)->first();
        return view('novost', [
            'title' => $article->title,
            'writtenOn' => $article->created_at,
            'picture' => $article->picture,
            'paragraph' => $article->text
        ]);
    }
}
