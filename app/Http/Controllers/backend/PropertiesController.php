<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'properties',
            'page_title' => 'properties',
            'breadcrumb' => [['link'=>'/', 'name' => 'dashboard'],['name' => 'properties']]


        ];
        return view('backend.pages.properties.index', $data);
    }
}
