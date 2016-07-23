<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;

class Controller extends BaseController {

	use ValidatesRequests, DispatchesJobs;

    public function index() 
    {
    	 return view('pages.index');
    }

    // public function current_trip() 
    // {
    //     return view('pages.current_trip');
    // }

}
