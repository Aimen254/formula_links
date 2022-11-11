<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    use HasFactory;
    public function images()
    {
       
        return $this->belongsToMany('App\Models\Image', 'imageformulas', 'image_id', 'formula_id');
   
    
    }
}
