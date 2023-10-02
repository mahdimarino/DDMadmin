<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class listingcontroller extends Controller
{
    public function index() {
        
        return view('posts.index',[
            'heading'=>'last listings',
            'listings'=> Listing::latest()->filter(request(['tag' , 'search']))->get()
                    
            ]);
    }

    public function home() {
        
        return view('home',[
            
                    
            ]);
    }
    public function staffhome() {
        
        return view('staffhome',[
            
                    
            ]);
    }

   

    public function show(Listing $listing){
        return view('posts.show',[
            'listing'=> $listing
        ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'email'=>'required',
            'tags'=>'required',
            'company'=>'required',
            'website'=>'required',
            'location'=>'required',
            
        ]);
if($request->hasFile('logo')){
    $formFields['logo'] =$request->file('logo')->store('imgs','public');
}


        Listing::create($formFields);
        return redirect('/')->with('message','Listing created seccessfuly');
    }
public function edit(Listing $listing){
    return view ('posts.edit',['listing'=>$listing]);
}

public function update(Request $request, Listing $listing){
    $formFields = $request->validate([
        'title'=>'required',
        'description'=>'required',
        'email'=>'required',
        'tags'=>'required',
        'company'=>'required',
        'website'=>'required',
        'location'=>'required',
        
    ]);
if($request->hasFile('logo')){
$formFields['logo'] =$request->file('logo')->store('imgs','public');
}


    $listing->update($formFields);
    return redirect('/')->with('message','Listing updated seccessfuly');
}

public function destroy(Listing $listing){
$listing->delete();
return redirect('/')->with('message','Listing deleted seccessfuly');
}
   
}
