<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = DB::table('patients')->paginate(10);

        return view('patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=$request->validate([
            'name'=>'required|min:4',
            'age'=>'required|numeric',
            'hospital'=>'required',
            'phone'=>'required|numeric|min:6',
        ]);
        $patient=Patient::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'hospital'=>$request->hospital,
            'phone'=>$request->phone,
            ]);
        Toastr::success('Patient added Successfully','Done!');
        return redirect(route('patients.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patient.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        // Toastr::warning('Patient Updating','!!!!!');
        return view('patient.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {

        $data=$request->validate([
            'name'=>'required|min:4',
            'age'=>'required|numeric',
            'hospital'=>'required',
            'phone'=>'required|numeric|min:6',
        ]);
        $data=$request->only(['name','age','hospital','phone']);
        $patient->update($data);
Toastr::success('Patient updated successfully','Done!');
return redirect(route('patients.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        Toastr::error('Patient Deleted Successfully','Done!');
        return redirect(route('patients.index'));
    }
    public function update_status(Patient $patient,Request $request)
    {
        Toastr::success('status updated successfully','Done!');
        DB::update("update patients set status = $request->status where id  =$patient->id");


        return redirect()->back();
    }
}
