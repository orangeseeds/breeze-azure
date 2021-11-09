<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultancy;
use App\Models\Course;
use Illuminate\Support\Facades\Mail;
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


        $mailMessage = "From: " . $validatedData["email"] . "\nMessage: \n" . $validatedData["message"];
        Mail::raw($mailMessage, function ($message) {
            $message->to('consultancy@admin.com')
                ->subject("Consultancy website Contact Form!");
        });

        return redirect()->back()->with('message','We will get back to you as soon as possible!');
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
       $query = $request->get('query');

         $data = Consultancy::where('name', 'LIKE', "%{$query}%");
         return view('search.autocomplete',["data"=>$data->paginate(10)]);
     }
    }
}
