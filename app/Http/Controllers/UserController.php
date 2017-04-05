<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function input(Request $request){
    	//return redirect()->route('profile');
    	if ($request->isMethod('post')) {
		 	$title = $request->title;
		 	$slug = $request->slug;
		 	$request->session()->put(['title'=>$title,'slug'=>$slug]);
    		//return view('user.output',['title'=>$title,'slug'=>$slug]);
		}
    	return view('user.input');
    }

    public function output(Request $request){
    	$title = $request->session()->get('title');
    	$slug = $request->session()->get('slug');
    	return view('user.output',['title'=>$title,'slug'=>$slug]);
    }

    public function api(){
    	return response()->json([
		    'title' => 'Abigail',
		    'slug' => 'CA'
		]);
    }

    public function getapi(){
    	$client = new Client();
		$res = $client->get('http://127.0.0.1:8000/user/api');
		echo $res->getStatusCode(); // 200
		echo $res->getBody();
    }

}
