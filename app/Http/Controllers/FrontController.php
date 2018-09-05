<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repair;
use App\Selling;

class FrontController extends Controller
{
    public function index ()
    {
    	return view('front.index');
    }
    
}
