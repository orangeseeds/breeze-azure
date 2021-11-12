<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultancy;
use App\Models\Application;
use App\Events\PageViewed;
use App\Events\ApplicationProcessed;
use App\Http\Resources\ConsultancyResource;
use App\Jobs\SendApplicationEmail;
class ConsultancyController extends Controller
{

    public function show(Request $request, Consultancy $consultancy)
    {
        PageViewed::dispatch($consultancy);
        $consultancy->scorecard();
        return view('consultancy.show', ["consultancy"=>$consultancy]);
    }

    public function api(Request $request, Consultancy $consultancy)
    {
        $data = ConsultancyResource::make($consultancy);

        return response()->json($data, 200);
    }

    public function index(Request $request)
    {
      $consultancies = Consultancy::paginate(10);

      return view('search.show', ['result'=>$consultancies]);
    }

    public function application_form(Request $request, Consultancy $consultancy)
    {
      return view('consultancy.apply',['consultancy'=>$consultancy]);
    }

    public function application_submit(Request $request, Consultancy $consultancy)
    {

      // dd($request);
      $validatedData = request()->validate([
        'consultancy_id' => 'required|numeric|exists:App\Models\Consultancy,id',
        'course_id' => 'required|numeric|exists:App\Models\Course,id',
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'phone_number' => 'required|digits:10|numeric',
        'requested_call' => 'nullable|in:on',
        'demo_class' => 'nullable|in:on',
      ]);
      // dd($validatedData);


      if (isset($validatedData['demo_class'])) {
        $validatedData['demo_class'] = true;
      }
      else {
        $validatedData['demo_class'] = false;
      }

      if (isset($validatedData['requested_call'])) {
        $validatedData['requested_call'] = true;
      }
      else {
        $validatedData['requested_call'] = false;
      }




      $application_form = new Application($validatedData);


      $consultancy->applications()->save($application_form);



      SendApplicationEmail::dispatch($validatedData);

      return redirect()->back()->with('success', 'The application form has been submitted successfully!');
    }
}
