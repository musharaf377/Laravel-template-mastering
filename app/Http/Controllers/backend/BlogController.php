<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'blog',
            'page_title' => 'blog',
            'breadcrumb' => [['link'=>'/', 'name' => 'dashboard'],['name' => 'blog']]


        ];
        return view('backend.pages.blog.index', $data);
    }
}
