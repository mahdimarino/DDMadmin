<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
   use HasFactory;

   public function scopeFilter($query, array $filters)
   {
    
    if($filters['search'] ?? false){
        $query->where('title','like','%'. request('search') . '%')
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