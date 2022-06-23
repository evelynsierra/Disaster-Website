<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin/mapview');
    }
    public function chartview()
    {
        return view('admin/chartview');
    }
    public function request()
    {
        return view('/request');
    }
    public function contact()
    {
        return view('/contact');
    }
    public function faq()
    {
        return view('/faq');
    }
}
