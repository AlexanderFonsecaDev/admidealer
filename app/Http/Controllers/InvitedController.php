<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InvitedController extends Controller
{
    public function vehicles() : View
    {
        return view('vehicles');
    }

    public function about() : View
    {
        return view('about');
    }

    public function faq() : View
    {
        return view('faq');
    }

    public function terms() : View
    {
        return view('terms');
    }

    public function contact() : View
    {
        return view('contact');
    }

}
