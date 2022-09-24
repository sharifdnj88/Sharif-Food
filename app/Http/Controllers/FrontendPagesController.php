<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPagesController extends Controller
{
    // Show Home Page
    public function ShowFrontendHomePage()
    {
        return view('frontend.pages.home');
    }

    // Show Menu Page
    public function ShowFrontendMenuPage()
    {
        return view('frontend.pages.menu');
    }
    // Show location Page
    public function ShowFrontendLocationPage()
    {
        return view('frontend.pages.location');
    }

    // Show Reservation Page
    public function ShowFrontendReservationPage()
    {
        return view('frontend.pages.reservation');
    }
    
}
