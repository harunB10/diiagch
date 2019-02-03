<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class HomeController extends Controller
{

    public function index()
    {
        $ads = Ad::orderBy('id', 'desc')->take(3)->get();
        return view('home', compact('ads'));
    }

    public function showAllAds(){
        $ads = Ad::all();
        return view('ads', compact('ads'));
    }

    public function showAd($id){
        $ads = Ad::where('id', $id)->get();

        return view('singleAd', compact('ads'));
    }

}
