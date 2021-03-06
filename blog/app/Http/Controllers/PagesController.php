<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }
    public function about(){
    	return view('pages.about');
    }
    public function contact(){
    	return view('pages.contact');
    }
    public function gallery(){
    	return view('pages.gallery');
    }
    public function booking(){
        return view('pages.book');
    }
    public function login(){
        return view('pages.login');
    }

    public function signup(){
        return view('pages.signup');
    }
     public function rooms(){
        return view('pages.rooms');
    }
}
