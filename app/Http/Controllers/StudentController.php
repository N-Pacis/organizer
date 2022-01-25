<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students_list = Student::orderBy('created_at', 'desc')->get();
        return view('dashboard.student-page',compact('students_list'));;
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
            'picture'=>'image|mimes:png,jpg,jpeg|max:2048',
            'firstname'=>'required',
            'lastname'=>'required',
            'enrolled_in'=>'required',
            'status'=>'required'
        ]);
        $input = $request->all();
        $user_id = auth()->user()->id;
        $input['added_by'] = $user_id;

        if(!$request->picture){
            $input['picture'] = "default-profile-pic.jpg";
        }
        else{
            $input['picture'] = time().'.'.$request->picture->extension();
            $request->picture->move(public_path('profile-pictures'),$input['picture']);
        }

        Student::create($input);
        return redirect('students')->with('flash_message','Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
