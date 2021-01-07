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

    public function showSpecific($id){
        $meal = DB::table('meals')->where('id', $id)->first();
        return view('jela.jelo', ['meal' => $meal]);
    }

    public function create(){
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $meal = new Meals();
        $meal->name = request('name');
        //$meal->slug = strtolower(str_replace(" ", "-", $meal->name));
        $meal->description = request('description');
        $meal->price = request('price');
        if (request('pic')) {
            $meal->picture = request('pic')->store('img_jela');
        }
            
        $meal->save();

        return redirect('/jela/' . $meal->id);
    }

    public function edit($id){
        $meal = DB::table('meals')->where('id', $id)->first();
        
        return view('jela.edit', ['meal' => $meal]);
    }
    
    public function update($id){
        $meal = DB::table('meals')->where('id', $id)->first();
        
        DB::table('meals')->where('id', $meal->id)->update(request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required', 
        ]));

        if(request('pic')){
            $picture = request('pic')->store('img_jela');
            DB::table('meals')->where('id', $meal->id)->update(['picture' => $picture]);
        }
            
        return redirect('/jela/' . $meal->id);
    }

    public function destroy($id){
        DB::table('meals')->where('id', $id)->delete();
        return redirect(route('jela'));
    }

}
