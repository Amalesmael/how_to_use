<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\ask;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin =  admin:: all();
        return view('admin.user.index',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        admin::create($request->all());
        return redirect("admin/user");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin =  admin::find($id);
        return view('admin.user.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {
        $admin =  admin::find($request->id);
        $admin->update($request->except(['_token','id']));
        return redirect("admin/user");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin =  admin::find($id);
        $admin->delete();
        return redirect('admin/user');
    }



    public function usercategort(){

        $categories =  category::all();
        return view('user.category.index',compact('categories'));
    }
    public function usercategortcreate(){
        return view('user.category.create');
    }
    public function storeusercategory(Request $request)
    {
        category::create($request->all());
        return redirect("user/category");
    }
    public function usercategortedit($id){
        $category =  category::find($id);
        return view('user.category.edit',compact('category'));
    }
    public function updateusercategory(Request $request)
    {
        $category =  category::find($request->id);
        $category->update($request->except(['_token','id']));
        return redirect("user/category");
    }
    public function destroyusercategory($id)
    {
        $category =  category::find($id);
        $category->delete();
        return redirect('user/category');
    }

    public function userask(){
        $ask =  ask:: all();
        return view('user.ask.index',compact('ask'));
    }
    public function useraskcreate(){
        $cat= category::all();
        $user= User ::all();
        return view('user.ask.create',compact('cat','user'));
    }
    public function storeuser(Request $request)
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
        return redirect("user/ask");
    }

    public function useraskedit($id){
        $ask =  ask::find($id);
        $cat= category::all();

        return view('user.ask.edit',compact('ask','cat'));
    }
    public function updateuserask(Request $request)
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
        return redirect("user/ask");
    }
    public function destroyuserask($id)
    {
        $ask =  ask::find($id);
        $ask->delete();
        return redirect('user/ask');
    }
}
