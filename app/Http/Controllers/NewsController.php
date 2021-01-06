<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use DB;
use Storage;

class NewsController extends Controller
{
    public function show(){
        $articles = DB::table('news')->orderBy('created_at', 'desc')->get();
           
        return view('novosti.novosti', [
            'articles' => $articles
        ]);
    }
    
    public function showCreate(){
        return view('novosti.create');
    }

    public function showSpecific($slug){
        $article = DB::table('news')->where('slug', $slug)->first();
        return view('novosti.novost', ['article' => $article]);
    }

    public function create(){
        request()->validate([
            'title' => 'required',
            'summary' => 'required',
            'text' => 'required'
        ]);

        $article = new News();
        $article->title = request('title');
        $article->slug = strtolower(str_replace(" ", "-", $article->title));
        $article->text = request('text');
        $article->summary = request('summary');
        if (request('pic')) {
            $article->picture = request('pic')->store('img_novosti');
        }
            
        $article->save();

        return redirect('/novosti/' . $article->slug);
    }
}
