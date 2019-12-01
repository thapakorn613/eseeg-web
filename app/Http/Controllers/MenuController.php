<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeUser;


class MenuController extends Controller
{
    public function toHome()
    {
        return view('tab_menu.home');
    }

    public function toAbout()
    {
        return view('tab_menu.about');
    }

    public function toContact()
    {
        return view('tab_menu.contact');
    }
    public function toService()
    {
        return view('tab_menu.contact');
    }

}
