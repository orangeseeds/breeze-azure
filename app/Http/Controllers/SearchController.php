<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultancy;
use App\Models\ConsultancyCourse;
use App\Models\ConsultancyCountry;
use App\Models\Country;
use App\Models\Course;

class SearchController extends Controller
{
  public function filter(Request $request){

    $validatedData = $request->validate([
        "reviews" => 'nullable|numeric',
        "rating_range" => 'nullable|numeric',
        "course" => 'nullable|exists:App\Models\Course,id',
        "price_range" => 'nullable|numeric',
        "class_size" => 'nullable|numeric',
        "country" => 'nullable|exists:App\Models\Country,id'
    ]);


    if (isset($validatedData['price_range'])) {
      // code...
      $validatedData['price_range'] = intval($validatedData['price_range']);
    }
    if (isset($validatedData['class_size'])) {
      // code...
      $validatedData['class_size'] = intval($validatedData['class_size']);
    }

    // dd($validatedData);

    $consultancies = Consultancy::withFilters( $validatedData )->paginate(10);

    // return response()->json($consultancies, 200);
    return view('search.display', ['result' => $consultancies]);
//
// /*
//   step-1. filter consultancies whose review count is >= provided param
//   step-2. from the result of step-1 filter further consultancies whose rating lies between range raing_min and rating_max
// */
// $consultancies = Consultancy::with('courses')
//   ->withCount('reviews')
//   ->having('reviews_count','>=',$validatedData['numberReviews'])
//   ->whereBetween('rating', [$validatedData['rating_min'], $validatedData['rating_max']])
//   ->get();
//
//   /*
//   The values for course are sent with 0 if display 'All courses' is selected in the select elem other wise the params contains value from 1 and up.
//
//   step-3. filter consultancies where course id matches the provied param from the result of step-2
//   step-4. filter consultancies whose provided course price is between range min_price and max_price from the result of step-3.
//   step-5. filter consultancies whose provided class size is between 0 to class size.
//
// */
//
//   if($validatedData['course'] != 0){
//     // $consultancies = $consultancies
//     //   ->whereHas('courses', function ($query) use($validatedData){
//     //     return $query
//     //       ->where('course_id',$validatedData['course'])
//     //       ->whereBetween('price', [intval($validatedData['min_price']), intval($validatedData['max_price'])])
//     //       ->whereBetween('class_size', [0, intval($validatedData['classSize'])]);
//     // });
//
//     $having_course = Course::where('id',$validatedData['course'])
//       ->first()->consultancies()
//       ->where('price','>=',intval($validatedData['min_price']))
//       ->where('price','<=', intval($validatedData['max_price']))
//       ->get();
//
//     $consultancies = $consultancies->intersect($having_course);
//
//
//   }
//   else {
//     $having_course = Course::where('id',$validatedData['course'])
//       ->first()->consultancies()
//       ->where('price','>=',intval($validatedData['min_price']))
//       ->where('price','<=', intval($validatedData['max_price']))
//       ->get();
//
//
//     $consultancies = $consultancies->intersect($having_course);
//   }
//
// /*
// The values for country are sent with 0 if display 'All countries' is selected in the select elem.
//
//
// */
//   // if($validatedData['country'] != 0){
//   //   $consultancies = $consultancies
//   //   ->whereHas('countries', function ($query) use ($validatedData){
//   //     return $query
//   //       ->where('country_id', $validatedData['country']);
//   //   });
//   // }
//
//
//   return view('search.display', ['result' => $consultancies]);
//
}
}
