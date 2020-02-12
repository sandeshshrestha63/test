<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }
    public function index(Request $request)
    {
        $students = $this->student->all();

        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $data = $this->validate($request, [ 
            'first_name'=>'required',
            'middle_name'=>'',
            'last_name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'parents_name'=>'required'
        ]);
        $student->saveStudent($data);
        return redirect('/students')->with('success','student info been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::where('id',$id)->first();
        return view('student.show',compact('student','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::where('id',$id)->first();

        return view('student.edit',compact('student','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = new Student();
        $data = $this->validate($request, [ 
            'first_name'=>'required',
            'middle_name'=>'',
            'last_name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'parents_name'=>'required'
        ]);
        $data['id'] = $id;
        $student->updateStudent($data);

        return redirect('/students')->with('success','data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('success','student has been deleted');
    }
}
