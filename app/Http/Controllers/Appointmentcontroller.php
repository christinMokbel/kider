<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class Appointmentcontroller extends Controller
{
         public function index(){
                $appointments =Appointment::get();
                return view('admin.appointments',compact('appointments'));
            }

            public function store(Request $request){
                $data = $request->validate([
                  'gurdianname'=>'required|string|max:50',
                  'gurdianemail'=> 'required|string',
                  'childname' => 'required',
                  'childage' => 'required',//|digits_between:2,7',
                  'message' => 'required',
                 ]);
                 Appointment::create($data);
                 return redirect('page/appointment');
               } 
        
         public function show(string $id)
            {
                $appointment= Appointment::findOrFail($id);
                return view('admin.showappointment', compact('appointment'));
            }
      
            public function destroy(string $id)
            {
                Appointment::where('id', $id)->delete();
                return redirect('appointment/appointments');
            }
            public function trashed()
            {
                $appointments=Appointment::onlyTrashed()->get();
                return view('admin.trashedappointment', compact('appointments'));
            }
        
            public function forceDelete(string $id)
            {
                Appointment::where('id', $id)->forceDelete();
                return redirect('appointment/appointments');
            }
        
            public function restore(string $id)
            {
                Appointment::where('id', $id)->restore();
                return redirect('appointment/appointments');
            }
}
