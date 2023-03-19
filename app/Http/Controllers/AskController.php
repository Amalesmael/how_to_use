<?php

namespace App\Http\Controllers;

use App\Models\ask;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ask =  ask:: all();
        return view('admin.ask.index',compact('ask'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat= category::all();
        $user= User ::all();
        return view('admin.ask.create',compact('cat','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img = $request->file("img");
        $imgname=$img->getClientOriginalName();
        $img->move("img",$imgname);
        ask::create([
            "name_of_user"=>$request->name_of_user,
            "img"=>$imgname,
            "ask"=>$request->ask,
            "id_cat"=>$request->id_cat,
        ]);
        return redirect("admin/ask");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ask =  ask::find($id);
        $cat= category::all();

        return view('admin.ask.edit',compact('ask','cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $img = $request->file("img");
        $imgname=$img->getClientOriginalName();
        $img->move("img",$imgname);
        $ask =  ask::find($request->id);
        $ask->update([
            "name_of_user"=>$request->name_of_user,
            "img"=>$imgname,
            "ask"=>$request->ask,
            "id_cat"=>$request->id_cat,
        ]);
        return redirect("admin/ask");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ask =  ask::find($id);
        $ask->delete();
        return redirect('admin/ask');
    }


}

