<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::get();
        return view('admin.faculty.managefaculty', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        // dd($users);
        return view('admin.faculty.addfaculty', compact('departments'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //   dd($request->all());
        if($request->hasFile('resume')){
            $file = $request->file('resume');
            $path = $file->store('faculties','public');
        }

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $p = $file->store('faculties','public');
        }

        $data = [
            //Database column_name => Form field name
            'name' => $request->name,
            'gender' => $request->gender,
            'department_id'=>$request->department,
            'designation' => $request->designation,
            'resume' => $path ?? null,
            'photo' => $p ?? null,
            'phone' => $request->phone,
            'email' => $request->email,

        ];

        $faculty = Faculty::create($data);
        return redirect()->route('admin.faculty.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $editfaculty = Faculty::find($id);
        $departments = Department::get();
        // $editfaculty = $faculty;
        // // dd($edituser);
        // $faculties = Faculty::get();
        return view('admin.faculty.addfaculty', compact('editfaculty','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // dd($request->all());
         if($request->hasFile('resume')){
            $file = $request->file('resume');
            $path = $file->store('faculties','public');
            Faculty::find($id)->update(['resume' => $path]);
        }
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = $file->store('faculties','public');
            Faculty::find($id)->update(['photo' => $path]);
        }

        $data = [
            //Database column_name => Form field name
            'name' => $request->name,
            'gender' => $request->gender,
            'department_id'=>$request->department,
            'designation' => $request->designation,
            'phone' => $request->phone,
            'email' => $request->email,

        ];

        $faculty = Faculty::find($id)->update($data);
        return redirect()->route('admin.faculty.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $facultes = Faculty::find($id)->delete();
        return redirect()->route('admin.faculty.index');
    }
}
