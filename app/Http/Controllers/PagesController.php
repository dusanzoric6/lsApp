<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome from Index';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['WEB design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function fiksni1(){
        return view('pages.windows.fiksni1');
    }
}
