<?php

namespace App\Http\Controllers;

use App\Models\Profilepic;
use Illuminate\Http\Request;

class ProfilePicController extends Controller
{
    public function create(){
        return view('profilepics.create');
    }

    public function store(Request $request){
       
if($request->hasFile('picture')){
    $formFields['user_id'] =$request->file('picture')->store('profilepics','public');
}


        Profilepic::create($formFields);
        return redirect('/tsak')->with('message','Profile Picture Added');
    }
}
