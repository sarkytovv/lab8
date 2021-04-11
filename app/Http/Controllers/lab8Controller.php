<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lab8;


class lab8Controller extends Controller
{
    public function index(){
        $lab8s = lab8::all();
        return view('main');
    }
    public function store(Request $request){
        $lab8s = new lab8();

            $lab8s->name=$request->name;
            $lab8s->surname=$request->surname;
            $lab8s->email=$request->email;
            $lab8s->image=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/', $lab8s->image);
            // $labs->move('public/images/', $request->image);
            $lab8s->save();
        return redirect()->route('refresh');
    }
}
