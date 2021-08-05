<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   
    public function index()
    {

        $data = [
            'title' => 'Home',
            'page_title' => 'Home'
        ];
        return view('frontend.pages.about.about',$data);
    }
}
