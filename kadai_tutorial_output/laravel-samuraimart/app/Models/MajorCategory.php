<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorCategory extends Model
{
    use HasFactory;

    public function major_category()
     {
         return $this->belongsTo(MajorCategory::class);
     }
}
