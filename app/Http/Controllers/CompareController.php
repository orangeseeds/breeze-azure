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
    $query = $request->get('query');
    $request = Request::create(route('consultancy.json',$query),'GET');
    $response = app()->handle($request);
    $consultancy = json_decode($response->getContent(), false);
    return view('components.compare-filled', ["consultancy"=>$consultancy]);
  }

  public function suggest(Request $request)
  {
   if($request->get('query'))
   {
     $query = $request->get('query');
       $data = Consultancy::where('name', 'LIKE', "%{$query}%")->get();
       return view('compare.suggest', ["data"=>$data]);
   }
  }
}
