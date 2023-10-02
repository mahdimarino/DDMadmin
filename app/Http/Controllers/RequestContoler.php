<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employeerequest;

class RequestContoler extends Controller
{
    public function create(){
        return view('employeerequests.create');
    }


    public function index() {
        
        return view('employeerequests.index',[
            
            'employeerequests'=> Employeerequest::latest()->get()
                    
            ]);
    }

    public function store(Request $request ){
        $formFields = $request->validate([
            'title'=>'required',
            'content'=>'required',
                 
        ]);
        $formFields['user_id'] = auth()-> id();
        Employeerequest::create($formFields);
        return redirect('/employeerequest/myRequests')->with('message','Request created seccessfuly');
    

    }

    public function destroy(Employeerequest $employeerequest){
        $employeerequest->delete();
        return redirect('/employeerequest/myRequests')->with('message','Request deleted seccessfuly');
        }

    public function myRequests(){
        return view('employeerequests.myRequests',['employeerequests' => auth()->user()->employeerequests()->get()]);
    }
}
