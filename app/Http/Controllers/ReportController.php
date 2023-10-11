<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        public function singleEmployeeReports($userId)
{
    // Get the user you want to view reports for
    $user = User::find($userId);

    if (!$user) {
        // Handle the case where the user is not found, e.g., show an error message or a 404 page
        return redirect()->route('reports.index')->with('error', 'User not found');
    }

    // Retrieve the reports for the specified user
    $reports = $user->reports;

    return view('reports.singleEmployeeReports', compact('reports', 'user'));
}
}
