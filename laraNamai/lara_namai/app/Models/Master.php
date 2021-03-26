<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    public function masterOutfits()
   {
       return $this->hasMany('App\Models\Outfit', 'master_id', 'id');
   }

    use HasFactory;
}
