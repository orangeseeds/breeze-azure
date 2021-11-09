<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'email',
      'phone_number',
      'requested_call',
      'demo_class',
      'course_id'
    ];

    public function consultancy(){

      return $this->belongsTo('App\Models\Consultancy');
    }
}
