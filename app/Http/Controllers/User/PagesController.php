<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function sermons()
    {
        return view('user.sermon');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function aboutUs()
    {
        return view('user.about');
    }

    public function events()
    {
        return view('user.events');
    }

    public function gallery()
    {
        return view('user.gallery');
    }
}
