<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Job_Description;
use App\Employee;

class Job_DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $job_descriptions = Job_Description::orderBy('id_job', 'DESC')->get();
        return view('admin.job_description.index', ['job_descriptions'=>$job_descriptions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $employees = Employee::all();

        return view('admin.job_description.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $job_descriptions = new Job_Description;
        $job_descriptions->id_job        = $request->id_job;
        $job_descriptions->id_karyawan   = $request->id_karyawan;
        $job_descriptions->job_deskripsi = $request->job_deskripsi;
        $job_descriptions->save();
        // dd('kesini');

        return redirect('job_description')->with('pesan', 'Data berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_job){

        $job_descriptions = job_description::findOrFail($id_job);
        return view('admin/job_description/edit', compact('job_descriptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_job){

        $job_descriptions = Job_Description::find($id_job);
        $job_descriptions->id_karyawan   = $request->id_karyawan;
        $job_descriptions->job_deskripsi = $request->job_deskripsi;
        $job_descriptions->save();
        return redirect('job_description')->with('pesan', 'Data berhasil di update');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){

        $job_descriptions = Job_Description::find($request->id_job);
        $job_descriptions->delete();
        return back()->with('pesan', 'Data berhasil dihapus');
    }
}
