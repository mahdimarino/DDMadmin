<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Task;
use App\Models\Report;
use App\Models\Listing;
use App\Models\Request;
use App\Models\Profilepic;
use App\Models\Employeerequest;
use App\Models\PerformanceReview;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
       
        'job_title',
        'group_name',
        'phone_number',
        'user_role',
        'logo',
        'image',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    public function profilepics(){
        return $this-> hasOne(Profilepic::class, 'user_id');
    }

    public function reports(){
        return $this-> hasMany(Report::class, 'user_id');
    }

    public function employeerequests(){
        return $this-> hasMany(Employeerequest::class, 'user_id');
    }
    public function performancereviews(){
        return $this-> hasMany(PerformanceReview::class, 'user_id');
    }

    public function tasks(){
        return $this-> hasMany(Task::class, 'user_id');
    }

    public function scopeFilter($query,array $filters)
    {
        if($filters['group_name'] ?? false){
            $query->where('group_name','like','%'. request('group_name') . '%');
        }

        if ($filters['job_title'] ?? false) {
            $query->where('job_title', 'like', '%' . $filters['job_title'] . '%');
        }
    
        
       /*  if($filters['search'] ?? false){
            $query->where('name','like','%'. request('search') . '%') ;
            
        } */
       }
}
