<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();

        return view('employee.index',[
            'employes'=>$employes, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');

        return back()->with('create', 'success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname'=>'required',
            'job_title'=>'required',
            'phone_number'=>'nullable|between:10,20'
        ]);

        Employe::create([
            'fullname'=> ucwords($request->fullname),
            'job_title'=>$request->job_title,
            'phone_number'=>$request->phone_number,
        ]);

        return back()->with('store', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        return view('employee.show',[
            'employe'=>$employe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        return view('employee.edit', [
            'employe'=>$employe
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        $request->validate([
            'fullname'=>'required',
            'job_title'=>'required',
            'phone_number'=>'nullable|between:10,20'
        ]);

        $employe->update([
            'fullname'=> ucwords($request->fullname),
            'job_title'=>$request->job_title,
            'phone_number'=>$request->phone_number,
        ]);

        return back()->with('update', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $employe->delete();
        return back()->with('destroy', 'success');
    }
}
