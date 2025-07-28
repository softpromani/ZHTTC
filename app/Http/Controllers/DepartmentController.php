<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::get();
        // dd($users);
        return view('admin.department.managedepartment', compact('departments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $departments = Department::get();
       return view('admin.department.adddepartment', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());


       if($request->hasFile('image')){
        $file = $request->file('image');
        $path = $file->store('departments','public');
    }

    $data = [
        //Database column_name => Form field name
        'name' => $request->name,
        'description' => $request->description,
        'image' => $path ?? null
    ];

    $department = Department::create($data);
    return redirect()->route('admin.department.index');
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
        $id=Crypt::Decrypt($id);
        // dd($id);
        // $editdepartment = $department;
        $editdepartment = Department::find($id);
        //  $departments = Department::get();
        return view('admin.department.adddepartment', compact('editdepartment',));
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
        // $adddepartment = Department::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store('departments','public');
            Department::find($id)->update(['image' => $path]);
        }

        $data = [
            //Database column_name => Form field name
            'name' => $request->name,
            'description' => $request->description,
        ];

        $department = Department::find($id)->update($data);
        return redirect()->route('admin.department.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    $id=Crypt::Decrypt($id);
        $department = Department::find($id)->delete();
        return redirect()->route('admin.department.index');
    }
}
