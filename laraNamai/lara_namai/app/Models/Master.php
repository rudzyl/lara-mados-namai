<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Master extends Model
{
    public static function create(Request $request){
        
        $master = new self;
        $master->name = $request->master_name;
        $master->surname = $request->master_surname;
        $master->save();
    }

    public function masterOutfits()
   {
       return $this->hasMany('App\Models\Outfit', 'master_id', 'id');
   }
   
    use HasFactory;
}
