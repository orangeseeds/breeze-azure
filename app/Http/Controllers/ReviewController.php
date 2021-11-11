<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Consultancy;

class ReviewController extends Controller
{
    //
    public function create(Consultancy $consultancy)
    {
        return view('review.create', compact('consultancy'));
    }

    public function store(Request $request, Consultancy $consultancy)
    {
        $validatedData = request()->validate([
            'writer_name' => 'required|string|max:255',
            'writer_email' => 'required|string|email|max:255',
            'joined_at' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'description' => 'required|min:3|max:1000',
            'rating' => 'numeric|min:0|max:5',
            'course_id' => 'required|numeric|exists:App\Models\Course,id',
            'consultancy_id' => 'required|numeric|exists:App\Models\Consultancy,id'
        ]);

        // dd($validatedData);

        $review = new Review($validatedData);

        $consultancy->reviews()->save($review);

        return redirect('/consultancy/'."$consultancy->slug")->with('success', 'Thankyou for the leaving a review!');
    }

    public function index(Consultancy $consultancy)
    {
      return view('review.index', ['consultancy'=>$consultancy, 'reviews'=> $consultancy->reviews()->paginate(10)]);
    }

    public function scorecard(Consultancy $consultancy)
    {
      $ratings = $consultancy->reviews->pluck('rating')->countBy();

      /*
      $collection is just for creating a template to store values for
      Excellent, Verygood ,..... values to display in the scoreboard

      And after merging $ratings with $collection all the values for specific keys gets replaced,
      and if some value like count for reviews with 3 stars doesnot exist they will have a value of 0 by default
      and therefore show 0 reviews which gave 3 star rating will be displayed on the score scoreboard.
      */
      $collection = collect(['1.00' =>0, '2.00' =>0,"3.00" =>0,"4.00" =>0,"5.00" =>0]);


      return view('comps.scorecard', ['ratings'=>$collection->merge($ratings), 'count'=>$consultancy->reviews->count()]);
    }
}
