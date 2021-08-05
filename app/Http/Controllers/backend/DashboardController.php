<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'page_title' => 'Dashboard',
            'breadcrumb' => [['name' => 'dashboard']]

        ];
        return view('backend.pages.dashboard.index', $data);
    }
}

