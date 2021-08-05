<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'About us',
            'page_title' => 'About us'
        ];
        return view('frontend.pages.about.about', $data);
    }
}
