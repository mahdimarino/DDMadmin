<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Rule;

class UserController extends Controller
{
   
    public function index(Request $request) {
        $group_name = $request->query('group_name');
        $job_title = $request->query('job_title');
        $name = $request->query('name');
    
        $users = User::query();
    
        if ($group_name) {
            $users->where('group_name', $group_name);
        }
    
        if ($job_title) {
            $users->where('job_title', $job_title);
        }

        /* if ($name) {
            $users->where('name', $name);
        } */
    
        $users = $users->orderBy('created_at', 'desc')->get();
    
        return view('users.index', ['users' => $users]);
    }

 
  /*   public function index()
{
    $users = User::orderBy('created_at', 'desc')->get();
    
    return view('users.index', ['users' => $users]);
} */

public function myProfile(User $users){
    return view('users.myProfile',[
        'users'=> $users
    ]);
}

public function userProfile($id) {
    // Retrieve the user data based on the provided $id
    $user = User::find($id);

    if (!$user) {
        // Handle the case where the user is not found, e.g., show an error message or redirect
        return abort(404); // You can customize this based on your needs
    }

    return view('users.userProfile', [
        'user' => $user // Pass the user data to the view
    ]);
}

    //show register/create form
    public function create(){
        return view('users.register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['email'],
            'password' => ['required', 'confirmed'],
            'phone_number' => ['required'],
            'job_title' => ['required'],
            'user_role' => ['required'],
            'group_name' => ['required'],
            
            
        ]);
       
    
        // Check if the email already exists
        $existingUser = User::where('email', $formFields['email'])->first();
    
        if ($existingUser) {
            return redirect('/register')->with('error', 'Email already exists. Please choose a different email.');
        }
        else{
             // Hash password
        $formFields['password'] = bcrypt($formFields['password']);
    
        // Create user
        $user = User::create($formFields);

    
        // Login
        auth()->login($user);
    
        return redirect('/task')->with('message', 'User logged in successfully');
        }
    
       
    }
    public function show(User $user){
        return view('users.show',[
            'users'=> $user
        ]);
    }

    public function edit(User $user){
        return view ('users.edit',['user'=>$user]);
    }

    public function update(Request $request, User $user){
        // Validate the incoming request data
        Log::info('User data:', ['user' => $user]);
        $formFields = $request->validate([
            
            'email' => 'required|email|unique:users,email,' . $user->id,
            
            'phone_number' => 'nullable',
            'location' => 'nullable',
            
        ]);
    
       
        Log::info('Form fields:', $formFields);
        // Check if a logo file was uploaded
        if ($request->hasFile('logo')) {
            $uploadedFile = $request->file('logo');
            $path = $uploadedFile->store('profilepics', 'public');
            Log::info('Uploaded file path: ' . $path);
            $formFields['logo'] = $path;
        }
        Log::info('Updated data:', $formFields);
        Log::info('Form fields: ' . json_encode($formFields));
        // Update the user's information with the validated data
        $user->update($formFields);
        
       
        return redirect('/staffhome')->with('message', 'Info updated successfully');
    }


    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','youn have been loged out');
    }
    public function login(){
        return view('users.login');
    }
    public function authenticate(Request $request){
        $formField = $request->validate([
            'name'=>['required'],
            'password'=>['required']
            
        ]);
        if(auth()->attempt($formField)){
            $request->session()->regenerate();
            return redirect('/index.php')->with('message','login succes');
        }
        
        return redirect()->back()->withErrors(['name' => 'Invalid credentials']);
    }
    
}
