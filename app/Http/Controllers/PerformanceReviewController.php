<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerformanceReview;

class PerformanceReviewController extends Controller
{
    public function create(){
       return view('reviews.create');
    }
}
