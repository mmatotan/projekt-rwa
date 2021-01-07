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

    public function showSpecific($id){
        $article = DB::table('news')->where('id', $id)->first();
        return view('novosti.novost', ['article' => $article]);
    }

    public function create(){
        request()->validate([
            'title' => 'required',
            'summary' => 'required',
            'text' => 'required'
        ]);

        $article = new News();
        // Ne treba slug ako koristimo id
        //$article->slug = strtolower(str_replace(" ", "-", $article->title));
        $article->title = request('title');
        $article->text = request('text');
        $article->summary = request('summary');
        if (request('pic')) {
            $article->picture = request('pic')->store('img_novosti');
        }
            
        $article->save();

        return redirect('/novosti/' . $article->id);
    }

    public function edit($id){
        $article = DB::table('news')->where('id', $id)->first();

        return view('novosti.edit', ['article' => $article]);
    }

    public function update($id){
        $article = DB::table('news')->where('id', $id)->first();

        DB::table('news')->where('id', $article->id)->update(request()->validate([
            'title' => 'required',
            'summary' => 'required',
            'text' => 'required', 
        ]));

        if(request('pic')){
            $picture = request('pic')->store('img_novosti');
            DB::table('news')->where('id', $article->id)->update(['picture' => $picture]);
        }

        return redirect('/novosti/' . $article->id);
    }

    public function destroy($id){
        DB::table('news')->where('id', $id)->delete();

        return redirect(route('novosti'));
    }
}
