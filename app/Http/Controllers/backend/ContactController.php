<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'contact',
            'page_title' => 'contact',
            'breadcrumb' => [['link'=>'/', 'name' => 'dashboard'],['name' => 'contact']]


        ];
        return view('backend.pages.contact.index', $data);
    }
}
