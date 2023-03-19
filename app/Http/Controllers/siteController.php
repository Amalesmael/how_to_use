<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\ask;
use App\Models\category;
use Illuminate\Console\View\Components\Ask as ComponentsAsk;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function hi(){
        return view('welcome');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function index(){
       $category= category::all();
        $ask = ask::all();
        return view('site.index',compact('category','ask'));
    }

    public function blog_id($id){
       $ask =ask::find($id);
      $answer= answer::where("ask_id",$id)->get();
       return view("askone",compact("ask","answer"));
    }

    public function categoty($id){
        $category= category::all();
        $ask = ask::where("id_cat",$id)->get();
        return view('site.index',compact('category','ask'));

    }

    public function answer(Request $r){
        answer::create($r->all());
     return response()->json();
    }
}
