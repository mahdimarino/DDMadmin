<?php

use App\Models\Listing;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequestContoler;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\listingcontroller;
use App\Http\Controllers\productcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/we', function () {
    return response('<h1>first project</h1>' , 200)
    ->header('content-type', 'text/plain')
    ->header('foo' , 'bar');
});

Route::get('/posts/{id}',function($id){
    dd($id);
    return response('Post'.$id);
})->where('id' ,'[0-9]+');

route::get('/search', function(Request $request){
     return $request->name .' '. $request->city;
    
});

Route::get('/test', function () {
    return 'Test route';
});

route::get('/home',[listingcontroller::class,'home']);
route::get('/staffhome',[listingcontroller::class,'staffhome']);

route::get('/staffdashboard',[listingcontroller::class,'staffdashboard']);

route::get('/',[UserController::class,'index'])->middleware('auth');

Route::get('/listing', [listingcontroller::class, 'index'])->middleware('auth');
route::get('/listing/create',[listingcontroller::class,'create']);
route::post('/listing', [listingcontroller::class, 'store']);
Route::get('/listing/{listing}/edit',[listingcontroller::class, 'edit']);
Route::put('/listing/{listing}/', [listingcontroller::class, 'update']);
Route::delete('/listing/{listing}/', [listingcontroller::class, 'destroy']);
route::get('/listing/{listing}', [listingcontroller::class, 'show']);



Route::get('/report/myReports',[ReportController::class,'myReports'])->middleware('auth');
Route::get('/report/create',[ReportController::class,'create']);
Route::post('/report',[ReportController::class,'store']);
Route::get('/report', [ReportController::class, 'index'])->middleware('auth');
Route::get('/report/{report}/edit',[ReportController::class, 'edit']);
Route::put('/report/{report}/', [ReportController::class, 'update']);
Route::delete('/report/{report}/', [ReportController::class, 'destroy']);



Route::get('/employeerequest/myRequests',[RequestContoler::class,'myRequests'])->middleware('auth');
Route::get('/employeerequest',[RequestContoler::class,'index'])->middleware('auth');
Route::get('/employeerequest/create',[RequestContoler::class, 'create']);
Route::post('employeerequest',[RequestContoler::class,'store']);
Route::delete('/employeerequest/{employeerequest}/', [RequestContoler::class, 'destroy']);


Route::get('/task/create',[TaskController::class,'create']);
Route::post('/task',[TaskController::class,'store']);
Route::get('/task',[TaskController::class,'index'])->middleware('auth');
Route::get('/task/myTaskslist',[TaskController::class,'myTaskslist'])->middleware('auth');
Route::delete('/task/{task}/', [TaskController::class, 'destroy']);
Route::get('/task/{task}/edit',[TaskController::class,'edit']);
Route::put('/task/{task}/', [TaskController::class, 'update']);




Route::get('/register',[UserController::class,'create']);
route::post('/users', [UserController::class, 'store']);
Route::get('/users', [UserController::class, 'index'])->middleware('auth');
route::get('/users/{users}', [UserController::class, 'myProfile']);
Route::get('/users/profile/{id}', [UserController::class, 'userProfile']);
Route::get('/users/{users}/edit',[UserController::class,'edit']);
 // Update the route name to match the method name


route::get('/products',[productcontroller::class,'index']);
route::get('products/products/{product}',[productcontroller::class,'show']);

Route::post('/logout',[UserController::class, 'logout']);
Route::get('/login',[UserController::class, 'login'])->name('login');

// Route::post('/users/authenticate',[UserController::class,'authenticate']);
 Route::post('/users/authenticate',[LoginController::class,'authenticate']);