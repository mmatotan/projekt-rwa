<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\webshop;
use Gate;
use DB;
use Auth;

class WebshopController extends Controller
{
    public function show(){
        $meals = DB::table('meals')->get();

        return view('webshop', [
            'meals' => $meals
        ]);
    }

    public function order(){
        $meals = DB::table('meals')->get();

        foreach($meals as $meal){
            $order = new webshop();
            $order->idJelo = $meal->id;
            $order->idUser = Auth::id();
            $order->quantity = request("quant".$meal->id);
            $order->adresa = request("adresa");
            $order->save();
        }

        return view('narudzba');
    }
}
