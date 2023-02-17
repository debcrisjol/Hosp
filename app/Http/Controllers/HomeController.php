<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Doctor;
use App\Appointment;

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
        $doctors =Doctor::all();
            return view ('user.home',compact('doctors'));

        }
        else{
            return view('admin.home');
        }
    }
    else {return redirect()->back();}
    }

    public function index(){
            $doctors =Doctor::all();
            return view('user.home',compact('doctors'));

        }



    public function appointment(Request $request){
        $data= new Appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';
        if(Auth::id()){
        $data->user_id=Auth::user()->id;}

        $data->save();
        return redirect()->back()->with('message','Appointment Request Succesful. We will contact you soon');
    }

    public function myappointment(){
        if(Auth::id()){
         $userid=Auth::user()->id;
         $appoint=Appointment::where('user_id',$userid)->get();
        return view('user.my_appointment',compact('appoint'));
    }
    else{
        return redirect()->back();
    }
}
public function cancel_appoint($id){
$data=Appointment::find($id);
$data->delete();
return redirect()->back();
}

public function aboutus(){
    $doctors =Doctor::all();
    return view('aboutus',compact('doctors'));
}
public function doctors(){
    $medic =Doctor::all();
    return view('doctors',compact('medic'));
}
public function news(){

    return view('news');
}



}
