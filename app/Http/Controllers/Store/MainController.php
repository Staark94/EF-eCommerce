<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function aboutus() {
        return view('aboutUs');
    }

    public function contact() {
        return view('contact');
    }
}
