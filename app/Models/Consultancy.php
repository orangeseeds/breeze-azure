<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Consultancy extends Model
{
    use HasFactory;

    protected $hidden = [
        'page_views',
        'sponsored',
        'created_at',
        'updated_at'
    ];

    public static function createSlug($title)
    {
        $slug = Str::slug($title,'-');
        $found = false;
        while(!$found)
        {
            if(Consultancy::where('slug','=',$slug)->doesntExist())
            {
                $found = true;
                break;
            }
            else
            {
                $random = Str::random(5);
                $slug = $slug . "-" . $random;
            }
        }
        return $slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function countries()
    {
        return $this->belongsToMany('App\Models\Country');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course')->withTimestamps()->withPivot(['price','course_duration','description','average_score','class_size']);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function applications()
    {
      return $this->hasMany('App\Models\Application');
    }

    public function scopeWithFilters($query, $parameters){



      return $query
        ->when($parameters['reviews'], function($query) use ($parameters){
            return $query->withCount('reviews')
              ->having('reviews_count', '>=' , $parameters['reviews']);
          })
        ->when($parameters['rating_range'], function($query) use ($parameters){
            return $query
              ->having('rating', '>=' , $parameters['rating_range']);
          })
        ->when($parameters['course'], function($query) use ($parameters){
            return $query->whereHas('courses', function($query) use ($parameters){
                  return $query->where('course_id',$parameters['course'])
                    ->having('price', '<=' , $parameters['price_range'])
                    ->having('class_size', '<=' , $parameters['class_size']);
            });
          })
          ->when($parameters['country'], function($query) use($parameters){
              return $query->whereHas('countries', function($query) use ($parameters){
                return $query->where('country_id',$parameters['country']);
              });
          });

    }
}
