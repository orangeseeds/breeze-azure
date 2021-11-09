<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function consultancies()
    {
      return $this->belongsToMany('App\Models\Consultancy')->withTimestamps()->withPivot(['price','course_duration','description','average_score','class_size']);
    }
}
