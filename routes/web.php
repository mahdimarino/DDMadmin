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




route::get('/staffdashboard',[listingcontroller::class,'staffdashboard'])->middleware('auth');



Route::get('/listing', [listingcontroller::class, 'index'])->middleware('auth');
route::get('/listing/create',[listingcontroller::class,'create'])->middleware('auth');
route::post('/listing', [listingcontroller::class, 'store'])->middleware('auth');
Route::get('/listing/{listing}/edit',[listingcontroller::class, 'edit'])->middleware('auth');
Route::put('/listing/{listing}/', [listingcontroller::class, 'update'])->middleware('auth');
Route::delete('/listing/{listing}/', [listingcontroller::class, 'destroy'])->middleware('auth');
route::get('/listing/{listing}', [listingcontroller::class, 'show'])->middleware('auth');
Route::get('/task',[TaskController::class,'index'])->middleware('auth');
Route::get('/register',[UserController::class,'create']);
route::post('/users', [UserController::class, 'store']);
Route::post('/logout',[UserController::class, 'logout']);
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/users/authenticate',[LoginController::class,'authenticate']);

 // Update the route name to match the method name


route::get('/products',[productcontroller::class,'index']);
route::get('products/products/{product}',[productcontroller::class,'show']);



// Route::post('/users/authenticate',[UserController::class,'authenticate']);
 


 // Admin Dashboard Routes
 Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminDashboardController@index');
    Route::get('/home', [listingcontroller::class, 'home']);
    route::get('/',[UserController::class,'index']);

    Route::get('/report', [ReportController::class, 'index']);
Route::get('/report/singleEmployeeReports/{userId}', [ReportController::class, 'singleEmployeeReports'])->name('report.singleEmployeeReports');

Route::get('/employeerequest',[RequestContoler::class,'index']);

Route::get('/task/create',[TaskController::class,'create']);
Route::post('/task',[TaskController::class,'store']);

Route::get('/task/myTaskslist',[TaskController::class,'myTaskslist']);
Route::delete('/task/{task}/', [TaskController::class, 'destroy']);
Route::get('/task/{task}/edit',[TaskController::class,'edit']);
Route::put('/task/{task}/', [TaskController::class, 'update']);

Route::get('/users', [UserController::class, 'index']);
route::get('/users/{users}', [UserController::class, 'myProfile']);
Route::get('/users/profile/{id}', [UserController::class, 'userProfile']);
Route::get('/users/{users}/edit',[UserController::class,'edit']);



});

// Employee Dashboard Routes
Route::middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/employee/dashboard', 'EmployeeDashboardController@index');
    
route::get('/staffhome',[listingcontroller::class,'staffhome']);

Route::get('/report/myReports',[ReportController::class,'myReports']);
Route::get('/report/create',[ReportController::class,'create']);
Route::post('/report',[ReportController::class,'store']);
Route::get('/report/{report}/edit',[ReportController::class, 'edit']);
Route::put('/report/{report}/', [ReportController::class, 'update']);
Route::delete('/report/{report}/', [ReportController::class, 'destroy']);

Route::get('/employeerequest/myRequests',[RequestContoler::class,'myRequests']);
Route::get('/employeerequest/create',[RequestContoler::class, 'create']);
Route::post('employeerequest',[RequestContoler::class,'store']);
Route::delete('/employeerequest/{employeerequest}/', [RequestContoler::class, 'destroy']);



route::get('/users/{users}', [UserController::class, 'myProfile']);

Route::get('/users/{users}/edit',[UserController::class,'edit']);
    
});

// Manager Dashboard Routes
/* Route::middleware(['auth', 'manager'])->group(function () {
    Route::get('/manager/dashboard', 'ManagerDashboardController@index');
}); */
