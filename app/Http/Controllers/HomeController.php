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
            return view ('user.home',compact('doctor'));

        }
        else{
            return view('admin.home');
        }
    }
    else {return redirect()->back();}
    }

    public function index(){
        if (Auth::id()){
            return redirect('user.home');
        }
        else{
            $doctor =Doctor::all();
            return view('user.home',compact('doctor'));

        }


    }
}


