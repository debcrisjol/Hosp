<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Doctor;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');

    //     $user = \Auth::user();

    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexx()
    {

if(Auth::id()){
       if(Auth::user()->usertype=='0'){
        $doctor =Doctor::all();
            // return view ('home');
            return dd($doctor);
        }
        else{
            return view('admin.home');
        }
    }
    else {return redirect()->back();}
    }

    public function index(){
         $doctor =Doctor::all();
         return view('home',compact('doctor'));


    }
}


