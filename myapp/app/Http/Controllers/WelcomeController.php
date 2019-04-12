<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post1;

class WelcomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function jeahee()
    {
        $jh = Post1::get();

        return response()->json([
            'title' => $jh[0]->title,
	    'body' => $jh[0]->body,
	    ], 200, [], JSON_PRETTY_PRINT);

    }

    public function hj($id)
    {
	$db = Post1::where('id', $id)->get();
	
	return array(  
	"id"=>$id,
	"title"=>$db[0]->title,
	"body"=>$db[0]->body
	);
    }
	
}
