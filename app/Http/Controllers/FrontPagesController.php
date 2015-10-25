<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;


class FrontPagesController extends Controller
{
    /**
     * Display the main page view
     *     
     */
    public function index()
    {
		return View::make('pages.main');
    }

}
