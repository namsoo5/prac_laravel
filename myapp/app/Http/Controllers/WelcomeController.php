<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Author;

class WelcomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function jeahee()
    {
        $jh = Author::get();

        return $jh;

    }
}
