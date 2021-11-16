<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultancy;
use \Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class CompareController extends Controller
{

  public function compare(Request $request)
  {
    return view('compare.show');
  }

  public function add(Request $request)
  {
    $validatedData = $request->validate([
        'query' => 'required|string|string|min:2|max:255'
    ]);

    $data = Consultancy::where('slug', '=', "{$validatedData['query']}")->first();

    if ($data == null) {
      $message = ["error" => "Consultancy not found!"];
      return response()->json($message, 404);
    }

    // $request = Request::create(route('consultancy.json',$data),'GET');
    // $response = app()->handle($request);
    // $consultancy = json_decode($response->getContent(), false);
    // dd($consultancy);
    return view('components.compare-filled', ["consultancy"=>$data]);
  }

  public function suggest(Request $request)
  {
   if($request->get('query'))
   {
     $validatedData = $request->validate([
         'query' => 'required|string|min:2|max:255'
     ]);
     $data = Consultancy::where('name', 'LIKE', "%{$validatedData['query']}%");
     return view('compare.suggest', ["data"=>$data->paginate(10)]);
   }
  }
}
