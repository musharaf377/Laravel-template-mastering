<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About',
            'page_title' => 'About us',
            'breadcrumb' => [['link'=>'/', 'name' => 'dashboard'],['name' => 'about']]


        ];
        return view('backend.pages.about.index', $data);
    }
}
