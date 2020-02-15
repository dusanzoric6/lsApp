<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Helper;

class WindowsController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth', ['except' => ['index', 'show']]);
   }

   public function calculate(Request $request){

       $data = array(
           'cena'=> Helper::fiksnoRacun($request)
        );
        
        // $this->validate($request,[
            //     'sirina' => 'required',
            //     'visina' => 'required'
            // ]);
            
            return view('pages.windows.fiksni1')->with($data);
        }
        
    }
    