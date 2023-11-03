<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PerformanceReview;
use Illuminate\Support\Facades\Auth;


class PerformanceReviewController extends Controller
{
    public function index() {
        return view('reviews.index',[ 
            'reviews'=> PerformanceReview::latest()->get()         
            ]);
    }
    public function ranking() {
        return view('reviews.ranking',[ 
            'reviews'=> PerformanceReview::latest()->get()         
            ]);
    }
    public function create(){
        $users = User::all();
        return view('reviews.create', ['users' => $users]);
     }
 
     public function store(Request $request){
         $formFields = $request->validate([
             'name'=>'required',
             'review_period'=>'required',
             'reviewer'=>'required',    
             'job_title'=>'required',
             'date_of_review'=>'required',
             'group_name'=>'required',
             /* 'goal1'=>'required',
             'goal2'=>'required',
             'goal3'=>'required',
             'goal4'=>'nullable',
             'goal5'=>'nullable',
             'achievedornot1'=>'required',
             'achievedornot2'=>'required',
             'achievedornot3'=>'required',
             'achievedornot4'=>'nullable',
             'achievedornot5'=>'nullable',
             'goal1comment'=>'required',
             'goal2comment'=>'required',
             'goal3comment'=>'required',
             'goal4comment'=>'nullable',
             'goal5comment'=>'nullable', */
             'answer1_personalrate'=>'required',
             'answer2_personalrate'=>'required',
             'answer3_personalrate'=>'required',
             'answer4_personalrate'=>'required',
             'answer5_personalrate'=>'required',
             'answer6_personalrate'=>'required',
             'answer7_personalrate'=>'required',
             'answer8_personalrate'=>'required',
             'answer9_personalrate'=>'required',
             'answer10_personalrate'=>'required',
             'answer1_personalcomment'=>'required',
             'answer2_personalcomment'=>'required',
             'answer3_personalcomment'=>'required',
             'answer4_personalcomment'=>'required',
             'answer5_personalcomment'=>'required',
             'answer6_personalcomment'=>'required',
             'answer7_personalcomment'=>'required',
             'answer8_personalcomment'=>'required',
             'answer9_personalcomment'=>'required',
             'answer10_personalcomment'=>'required',
 
            
         ]);
 
         $formFields['user_id'] = auth()-> id();
 
         PerformanceReview::create($formFields);
         return redirect('/staffhome')->with('message','Report created seccessfuly');
     }
 
    public function reviewToPrint(PerformanceReview $review){
        return view('reviews.reviewToPrint',[
            'review'=> $review
        ]);
    }
    public function edit(PerformanceReview $review) {
        
    
        return view('reviews.edit' ,['review'=>$review]);
    }

    public function update(Request $request, PerformanceReview $review){
        $formFields = $request->validate([
            'name' => 'nullable',
    'review_period' => 'nullable',
    'reviewer' => 'nullable',
    'job_title' => 'nullable',
    'date_of_review' => 'nullable',
    'group_name' => 'nullable',
    'goal1' => 'nullable',
    'goal2' => 'nullable',
    'goal3' => 'nullable',
    'goal4' => 'nullable',
    'goal5' => 'nullable',
    'achievedornot1' => 'nullable',
    'achievedornot2' => 'nullable',
    'achievedornot3' => 'nullable',
    'achievedornot4' => 'nullable',
    'achievedornot5' => 'nullable',
    'goal1comment' => 'nullable',
    'goal2comment' => 'nullable',
    'goal3comment' => 'nullable',
    'goal4comment' => 'nullable',
    'goal5comment' => 'nullable',
    'answer1_personalrate' => 'nullable',
    'answer2_personalrate' => 'nullable',
    'answer3_personalrate' => 'nullable',
    'answer4_personalrate' => 'nullable',
    'answer5_personalrate' => 'nullable',
    'answer6_personalrate' => 'nullable',
    'answer7_personalrate' => 'nullable',
    'answer8_personalrate' => 'nullable',
    'answer9_personalrate' => 'nullable',
    'answer10_personalrate' => 'nullable',
    'answer1_seniormanagerrate' => 'nullable',
    'answer2_seniormanagerrate' => 'nullable',
    'answer3_seniormanagerrate' => 'nullable',
    'answer4_seniormanagerrate' => 'nullable',
    'answer5_seniormanagerrate' => 'nullable',
    'answer6_seniormanagerrate' => 'nullable',
    'answer7_seniormanagerrate' => 'nullable',
    'answer8_seniormanagerrate' => 'nullable',
    'answer9_seniormanagerrate' => 'nullable',
    'answer10_seniormanagerrate' => 'nullable',
    'answer1_linemanagerrate' => 'nullable',
    'answer2_linemanagerrate' => 'nullable',
    'answer3_linemanagerrate' => 'nullable',
    'answer4_linemanagerrate' => 'nullable',
    'answer5_linemanagerrate' => 'nullable',
    'answer6_linemanagerrate' => 'nullable',
    'answer7_linemanagerrate' => 'nullable',
    'answer8_linemanagerrate' => 'nullable',
    'answer9_linemanagerrate' => 'nullable',
    'answer10_linemanagerrate' => 'nullable',
    'answer1_personalcomment' => 'nullable',
    'answer2_personalcomment' => 'nullable',
    'answer3_personalcomment' => 'nullable',
    'answer4_personalcomment' => 'nullable',
    'answer5_personalcomment' => 'nullable',
    'answer6_personalcomment' => 'nullable',
    'answer7_personalcomment' => 'nullable',
    'answer8_personalcomment' => 'nullable',
    'answer9_personalcomment' => 'nullable',
    'answer10_personalcomment' => 'nullable',
    'answer1_seniormanagercomment' => 'nullable',
    'answer2_seniormanagercomment' => 'nullable',
    'answer3_seniormanagercomment' => 'nullable',
    'answer4_seniormanagercomment' => 'nullable',
    'answer5_seniormanagercomment' => 'nullable',
    'answer6_seniormanagercomment' => 'nullable',
    'answer7_seniormanagercomment' => 'nullable',
    'answer8_seniormanagercomment' => 'nullable',
    'answer9_seniormanagercomment' => 'nullable',
    'answer10_seniormanagercomment' => 'nullable',
    'answer1_linemanagercomment' => 'nullable',
    'answer2_linemanagercomment' => 'nullable',
    'answer3_linemanagercomment' => 'nullable',
    'answer4_linemanagercomment' => 'nullable',
    'answer5_linemanagercomment' => 'nullable',
    'answer6_linemanagercomment' => 'nullable',
    'answer7_linemanagercomment' => 'nullable',
    'answer8_linemanagercomment' => 'nullable',
    'answer9_linemanagercomment' => 'nullable',
    'answer10_linemanagercomment' => 'nullable',
    'linemanager_rating1' => 'nullable',
    'linemanager_rating2' => 'nullable',
    'linemanager_rating3' => 'nullable',
    'linemanager_rating4' => 'nullable',
    'linemanager_rating5' => 'nullable',
    'seniormanager_evaluation1' => 'nullable',
    'seniormanager_evaluation2' => 'nullable',
    'seniormanager_evaluation3' => 'nullable',
    'seniormanager_evaluation4' => 'nullable',
    'seniormanager_evaluation5' => 'nullable',
    'general_assessment1' => 'nullable',
    'general_assessment2' => 'nullable',
            
            
        ]);
    
    
    
        $review->update($formFields);
        return redirect("performancereview/{$review->id}")->with('message','report updated seccessfuly');
    }

    

    
}
