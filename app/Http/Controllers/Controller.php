<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


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
