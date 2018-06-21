<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel !!!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us test';
        return view('pages.about')->with('title2', $title);
    }

    public function services(){

        $web = 'Web Design';
        $data = array(
            'servicetitle' => 'Services',
            'servicesoffered' => [$web, 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
        
  
    }
}
