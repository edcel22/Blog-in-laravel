<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function getabout()
    {
    	$first = 'Edcel';
    	$last = 'Estadola';

    	$full = $first." ".$last;
        

        return view('about',compact('full'));
    }
    public function getcontact()
    {
    	return view('contact');
    }

}
