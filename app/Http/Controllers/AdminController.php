<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Doctor;
use App\Appointment;
class AdminController extends Controller
{
    public function addview()
    {

        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
        $doctor = new Doctor;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Succefully');

    }
    public function showappointment()
    {
        $data = Appointment::all();
        return view('admin.showappointment', compact('data'));
    }
    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = "approved";
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data = Appointment::find($id);
        $data->status = "canceled";
        $data->save();
        return redirect()->back();
    }
    public function showdoctor()
    {
        $data = Doctor::all();
        return view('admin.showdoctor', compact('data'));
    }
    public function deletedoctor($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatedoctor($id)
    {
        $data = Doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }
    public function editdoctor(Request $request,$id)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }
        $doctor->save();
        return redirect()->back()->with('message','Doctor Details updated ');
    }
    public function homeadmin(){
        if(Auth::id()){
            if(Auth::user()->usertype=='1'){
                $doctors =Doctor::all();
                $otherdata=Appointment::all();
                $data=Doctor::all();

                return view('admin.body')->with(compact('doctors','otherdata','data'));
             }

         else if (Auth::user()->usertype=='0'){
            $doctors =Doctor::all();


            return view('user.home')->with(compact('doctors'));
         }
         else{
            return view ('welcome');
         }




        }
    }
}

