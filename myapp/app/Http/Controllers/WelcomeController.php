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

	if($db->isEmpty()){
	    return array(
	    "result"=>"can not found",
	    "title"=>"no have data",
	    "body"=>[]
	    );
	}

	return array(  
	"result"=>$id,
	"title"=>$db[0]->title,
	"body"=>$db[0]->body
	);
    }

    public function insert($title, $body)
    {
	$data = new Post1;
	$data->title = $title;
	$data->body = $body;
	$data->save();
	
	return "Success insert data";
    }
}
