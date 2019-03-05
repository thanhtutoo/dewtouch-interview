<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopupController extends Controller
{
 	public function showResult(Request $request){
 		// dd($request);
 		$result = $request->result;
 		return view('popup.show_result',compact('result'));
 	}
}
