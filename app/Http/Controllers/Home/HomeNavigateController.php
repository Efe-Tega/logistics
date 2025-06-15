<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeNavigateController extends Controller
{
    public function Home()
    {
        return view('frontend.index');
    }

    public function About()
    {
        return view('frontend.about');
    }

    public function Service()
    {
        return view('frontend.services');
    }

    public function Contact()
    {
        return view('frontend.contact');
    }

    public function Track()
    {
        return view('frontend.tracking');
    }
}
