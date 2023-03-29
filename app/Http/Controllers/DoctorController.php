<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $doctors=doctor::all();
        return view('doctor.index',['doctor'=>$doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $doctor = new Doctor;
        $doctor->department_id=$request->department_id;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->fee=$request->fee;
        $doctor->save();
        return redirect('doctor');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor=doctor::find($id);
        return view('doctor.edit',['doc'=>$doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $doctor=doctor::find($id);
        $doctor->department_id=$request->department_id;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->fee=$request->fee;
        $doctor->save();
        return redirect('doctor');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        doctor::destroy($id);
        return redirect('doctor');  
    }
}
