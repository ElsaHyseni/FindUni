<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $request){
      $UserEmail = $request->input('UserEmail');
      $UserMessage = $request->input('UserMessage');

      $data = array('UserEmail'=>$UserEmail, 'UserMessage'=>$UserMessage);

      DB::table('messages')->insert($data);
      return view('messageSent');
    }

    function retrieve(Request $req){
      $Toefl = $req->input('TOEFLpoints');
      $Sat = $req->input("SATpoints");
      $Country = $req->input("Country");
      $data = array('Toefl'=>$Toefl, 'Sat'=>$Sat, 'Country'=>$Country);

      DB::table('UInput')->insert($data);

      return view('results');
    }
}
