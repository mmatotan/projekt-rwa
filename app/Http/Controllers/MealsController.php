<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\meals;
use DB;

class MealsController extends Controller
{
    public function show(){
        $meals = DB::table('meals')->get();
           
        return view('jela.jela', [
            'meals' => $meals
        ]);
    }

    public function showCreate(){
        return view('jela.create');
    }

    public function create(){
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $meal = new Meals();
        $meal->name = request('name');
        $meal->slug = strtolower(str_replace(" ", "-", $meal->name));
        $meal->description = request('description');
        $meal->price = request('price');
        if (request('pic')) {
            $meal->picture = request('pic')->store('img_jela');
        }
            
        $meal->save();

        return redirect('/jela/' . $meal->slug);
    }

    public function showSpecific($slug){
        $meal = DB::table('meals')->where('slug', $slug)->first();
        return view('jela.jelo', [
            'name' => $meal->name,
            'price' => $meal->price,
            'picture' => $meal->picture,
            'description' => $meal->description
        ]);
    }
}
