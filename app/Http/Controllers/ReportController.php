<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        
        return view('reports.index',[
            
            'reports'=> Report::latest()->get()
                    
            ]);
    }

   



    public function create(){
        return view('reports.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'content'=>'required',
            

            
        ]);

        $formFields['user_id'] = auth()-> id();

        Report::create($formFields);
        return redirect('/report/myReports')->with('message','Report created seccessfuly');
    }

    public function edit(Report $report){
        return view ('reports.edit',['report'=>$report]);
    }

    public function update(Request $request, Report $report){
        $formFields = $request->validate([
            'title'=>'required',
            'content'=>'required',
            
            
        ]);
    
    
    
        $report->update($formFields);
        return redirect('/report/myReports')->with('message','report updated seccessfuly');
    }

    public function destroy(Report $report){
        $report->delete();
        return redirect('/report/myReports')->with('message','Report deleted seccessfuly');
        }

        public function myReports(){
            return view('reports.myReports',['reports' => auth()->user()->reports()->get()]);
        }
}
