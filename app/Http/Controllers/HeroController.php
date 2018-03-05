<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hero;
use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('name', $hero_slug)->first();


        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index(){
        $heroes = \App\Hero::all()->sortBy("name");
        // $view =view('index');
        return $heroes;
    }



    public function store(){

        $newRow = new Poll();
        $newRow ->user_id = Auth::user()->id;
        $newRow ->subject= $request ->get('subject');
        $newRow ->description = $request ->get('description');
        $newRow ->save();

        }


}
