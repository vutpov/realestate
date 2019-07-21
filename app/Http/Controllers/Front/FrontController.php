<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class FrontController extends Controller
{




    public function Home()
    {
        dd(getLogo());
        return View('front.index');
    }
    public function Contact()
    {
        return View('front.contact');
    }

    public function about()
    {
        return View('front.about');
    }

    public function search()
    {
        return View('front.search');
    }
    public function showResult()
    {
        return View('front.show');
    }

    public function getLogo()
    {
        return App\Company::select('logo')->get()[0];
    }
}
