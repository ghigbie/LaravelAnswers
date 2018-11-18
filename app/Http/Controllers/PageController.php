<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return "About us page";
    }

    public function contact(){
        return "Contact page";
    }
}
