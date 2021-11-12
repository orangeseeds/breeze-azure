<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultancy;
use App\Models\Course;
// use Illuminate\Support\Facades\Mail;
use App\Jobs\SendContactEmail;
use DB;

class HomeController extends Controller
{
    public function landing()
    {
        $courses = Course::all();
        return view('landing', ["courses"=>$courses]);
    }

    public function contactUsForm()
    {
        return view('contactus');
    }

    public function contactUs(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:12|max:1000'
        ]);


        SendContactEmail::dispatch($validatedData);

        return redirect()->back()->with('success','Thankyou for leaving a message. We will get back to you soon!');
    }

    public function searchName(Request $request)
    {
        $validatedData = $request->validate([
            'consultancy_name' => 'required|string|min:3|max:60'
        ]);

        $result = Consultancy::where('name','like',"%{$validatedData["consultancy_name"]}%")->paginate(10);
        return view('search.show', ["result"=>$result]);


    }

    public function searchCourse(Request $request)
    {
        $validatedData = $request->validate([
            'course' => 'required|numeric|exists:App\Models\Course,id'
        ]);
        $consultancies = Consultancy::whereHas('courses', function ($query) use($validatedData)
        {
            return $query
              ->where('course_id',$validatedData['course']);
        });
        return view('search.show', ["result"=>$consultancies->paginate(10)]);

    }

// this shows suggestions when typed in the search bar
    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
       $validatedData = $request->validate([
           'query' => 'required|string|min:2|max:60'
       ]);

       $query = $validatedData['query'];

         $data = Consultancy::where('name', 'LIKE', "%{$query}%");
         return view('search.autocomplete',["data"=>$data->paginate(10)]);
     }
    }
}
