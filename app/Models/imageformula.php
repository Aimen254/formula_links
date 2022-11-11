<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageformula extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_id',
        'formula_id',
    ];
    public function getimageForm()
    {
        return $this->hasOne('App\Models\Image', 'id', 'image_id')->withTimestamps();
    }
}
