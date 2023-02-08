<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function create(){
        return view('frontend.create');
    }
    public function login(){
        return view('frontend.login');
    }
}
