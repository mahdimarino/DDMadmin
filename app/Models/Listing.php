<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model{
   use HasFactory;

//    protected $fillable =['title','description','email','tags','company','website','location'];

   public function scopeFilter($query, array $filters)
   {
    if($filters['tag'] ?? false){
        $query->where('tags','like','%'. request('tag') . '%');
    }
    if($filters['search'] ?? false){
        $query->where('tags','like','%'. request('search') . '%') 
        ->orWhere('title','like','%'. request('search') . '%')
        ->orWhere('description','like','%'. request('search') . '%');
    }
   }
   /*  public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    } */
}