<?php

namespace App\Http\Controllers;

use App\Models\Duck;
use Illuminate\Http\Request;

class DuckController extends Controller
{
    public function ducks(){
        $ducks = Duck::all();
        return view('ducks', ["ducks"=> $ducks]);
    }

    public function createDuck(){
        return view('createDuck');
    }

    public function createDuckPost(Request $request){
        $duck = new Duck();
        $duck->duckName = $request->duckName;
        $duck->duckBreed = $request->duckBreed;
        $duck->save();

        return redirect('ducks');
    }

    public function updateDuck(Duck $duck){
        return view('updateDuck', ["duck" => $duck]);
    }

    public function updateDuckPost(Request $request, Duck $duck){
        $duck->duckName = $request->duckName;
        $duck->duckBreed = $request->duckBreed;
        $duck->save();

        return redirect('ducks');
    }

    public function deleteDuck(Duck $duck){
        $duck->delete();
        return back();
    }
}
