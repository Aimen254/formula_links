<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
   
        public function formulas()
        {
            return $this->belongsToMany('App\Models\Formula', 'imageformulas' ,'image_id', 'formula_id');
        }
    
    
}
