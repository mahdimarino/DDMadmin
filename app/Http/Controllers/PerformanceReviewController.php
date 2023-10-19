<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PerformanceReview;

class PerformanceReviewController extends Controller
{
    public function index() {
        return view('reviews.index',[ 
            'reviews'=> PerformanceReview::latest()->get()         
            ]);
    }
    public function create(){
        return view('reviews.create');
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
         return redirect('/')->with('message','Report created seccessfuly');
     }
 
    public function reviewToPrint(PerformanceReview $review){
        return view('reviews.reviewToPrint',[
            'review'=> $review
        ]);
    }
    public function edit(PerformanceReview $review){
        return view ('reviews.edit',['review'=>$review]);
    }

    public function update(Request $request, PerformanceReview $review){
        $formFields = $request->validate([
            'name' => 'required',
    'review_period' => 'required',
    'reviewer' => 'required',
    'job_title' => 'required',
    'date_of_review' => 'required',
    'group_name' => 'required',
    'goal1' => 'required',
    'goal2' => 'required',
    'goal3' => 'required',
    'goal4' => 'required',
    'goal5' => 'required',
    'achievedornot1' => 'required',
    'achievedornot2' => 'required',
    'achievedornot3' => 'required',
    'achievedornot4' => 'required',
    'achievedornot5' => 'required',
    'goal1comment' => 'required',
    'goal2comment' => 'required',
    'goal3comment' => 'required',
    'goal4comment' => 'required',
    'goal5comment' => 'required',
    'answer1_personalrate' => 'required',
    'answer2_personalrate' => 'required',
    'answer3_personalrate' => 'required',
    'answer4_personalrate' => 'required',
    'answer5_personalrate' => 'required',
    'answer6_personalrate' => 'required',
    'answer7_personalrate' => 'required',
    'answer8_personalrate' => 'required',
    'answer9_personalrate' => 'required',
    'answer10_personalrate' => 'required',
    'answer1_seniormanagerrate' => 'required',
    'answer2_seniormanagerrate' => 'required',
    'answer3_seniormanagerrate' => 'required',
    'answer4_seniormanagerrate' => 'required',
    'answer5_seniormanagerrate' => 'required',
    'answer6_seniormanagerrate' => 'required',
    'answer7_seniormanagerrate' => 'required',
    'answer8_seniormanagerrate' => 'required',
    'answer9_seniormanagerrate' => 'required',
    'answer10_seniormanagerrate' => 'required',
    'answer1_linemanagerrate' => 'required',
    'answer2_linemanagerrate' => 'required',
    'answer3_linemanagerrate' => 'required',
    'answer4_linemanagerrate' => 'required',
    'answer5_linemanagerrate' => 'required',
    'answer6_linemanagerrate' => 'required',
    'answer7_linemanagerrate' => 'required',
    'answer8_linemanagerrate' => 'required',
    'answer9_linemanagerrate' => 'required',
    'answer10_linemanagerrate' => 'required',
    'answer1_personalcomment' => 'required',
    'answer2_personalcomment' => 'required',
    'answer3_personalcomment' => 'required',
    'answer4_personalcomment' => 'required',
    'answer5_personalcomment' => 'required',
    'answer6_personalcomment' => 'required',
    'answer7_personalcomment' => 'required',
    'answer8_personalcomment' => 'required',
    'answer9_personalcomment' => 'required',
    'answer10_personalcomment' => 'required',
    'answer1_seniormanagercomment' => 'required',
    'answer2_seniormanagercomment' => 'required',
    'answer3_seniormanagercomment' => 'required',
    'answer4_seniormanagercomment' => 'required',
    'answer5_seniormanagercomment' => 'required',
    'answer6_seniormanagercomment' => 'required',
    'answer7_seniormanagercomment' => 'required',
    'answer8_seniormanagercomment' => 'required',
    'answer9_seniormanagercomment' => 'required',
    'answer10_seniormanagercomment' => 'required',
    'answer1_linemanagercomment' => 'required',
    'answer2_linemanagercomment' => 'required',
    'answer3_linemanagercomment' => 'required',
    'answer4_linemanagercomment' => 'required',
    'answer5_linemanagercomment' => 'required',
    'answer6_linemanagercomment' => 'required',
    'answer7_linemanagercomment' => 'required',
    'answer8_linemanagercomment' => 'required',
    'answer9_linemanagercomment' => 'required',
    'answer10_linemanagercomment' => 'required',
    'linemanager_rating1' => 'required',
    'linemanager_rating2' => 'required',
    'linemanager_rating3' => 'required',
    'linemanager_rating4' => 'required',
    'linemanager_rating5' => 'required',
    'seniormanager_evaluation1' => 'required',
    'seniormanager_evaluation2' => 'required',
    'seniormanager_evaluation3' => 'required',
    'seniormanager_evaluation4' => 'required',
    'seniormanager_evaluation5' => 'required',
    'general_assessment1' => 'required',
    'general_assessment2' => 'required',
            
            
        ]);
    
    
    
        $review->update($formFields);
        return redirect('/')->with('message','report updated seccessfuly');
    }

    

    
}
