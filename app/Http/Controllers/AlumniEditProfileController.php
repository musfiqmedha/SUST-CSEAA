<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniEditProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumni.aedit');
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
          'gender' => 'required |max:255',
          'marital' => 'required |max:255',
          'p_address' => 'required |max:255',
          't_address' => 'required |max:255',
          'p_occupation' => 'required |max:255',
          'skills' => 'required |max:255',
          'p_number' => 'required |max:255',
           'email' => 'required |max:255',
          'a_area' => 'required |max:255',
           'language' => 'required |max:255',
          'overview' => 'required |max:255',

          
         
          
       ));
       $alumni = new Alumni();

       $alumni->id= $request-> {{Auth::user()->id}};

       $alumni->full_name = $request->full_name;
      
      $file = $request->file('file');
     // $path = 'public/com_img';
     $filename = $file->getClientOriginalName();
      $file->move(public_path().'/Alumni_img/', $filename);

        
           $alumni->gender = $request->gender;
            $alumni->marital = $request->marital;
             $alumni->p_address = $request->p_address;
            
             $alumni->t_address = $request->t_address;
               $alumni->p_occupation = $request->p_occupation;
                 $alumni->skills = $request->skills;
                  $alumni->p_number = $request->p_number;
                   $alumni->email = $request->email;
                   $alumni->a_area = $request->a_area;
                   $alumni->language = $request->language;
                   $alumni->overview = $request->overview;

                   $alumni->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
