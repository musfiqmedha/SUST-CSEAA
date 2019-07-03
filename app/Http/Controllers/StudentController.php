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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(

          'full_name' => 'required |max:255',
           'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'registration' => 'required |max:255',
          'gender' => 'required |max:255',
          'p_district' => 'required |max:255',
          'p_area' => 'required |max:255',
          'p_street' => 'required |max:255',
          't_district' => 'required |max:255',
          't_area' => 'required |max:255',
          't_street' => 'required |max:255',
          'skills' => 'required |max:255',
          'number' => 'required |max:255',
          'email' => 'required |max:255',
          'language' => 'required |max:255',
          'overview' => 'required |max:255',
          
       ));
       $student = new Student();

       $student->full_name = $request->full_name;

    
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->file->move(public_path('images'), $imageName);


      return back()
        ->with('success','Image Uploaded successfully.')
        ->with('path',$imageName);     


         $student->registration = $request->registration;
           $student->gender = $request->gender;
            $student->marital = $request->marital;
             $student->p_district = $request->p_district;
              $student->p_area = $request->p_area;
               $student->p_street = $request->p_street;
                 $student->t_district = $request->t_district;
              $student->t_area = $request->t_area;
               $student->t_street = $request->t_street;

                 $student->skills = $request->skills;
                  $student->number = $request->number;
                   $student->email = $request->email;
                   
                   $student->language = $request->language;
                   $student->overview = $request->overview;

                   $student->save();
                     return back()->with('success', 'Your images has been successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
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
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
