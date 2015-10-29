<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;


class FrontPagesController extends Controller
{
    /**
     * Display the 'home' page view
     *     
     */
    public function home()
    {
		return View::make('pages.home');
    }
    
    /**
     * Display the 'about' page view
     *
     */
    public function about()
    {
    	return View::make('pages.about');
    }

}
