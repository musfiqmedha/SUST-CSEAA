<?php

namespace App\Http\Controllers;

use App\Executive;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.executive');
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
          'designation' => 'required |max:255',
          'file'=> 'required |max:255',
          'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'date_of_birth' => 'required |max:255',
          'gender' => 'required |max:255',
          'p_district' => 'required |max:255',
          'p_area' => 'required |max:255',
          'p_street' => 'required |max:255',
          'email' => 'required |max:255',
          
       ));
       $executive = new Executive();

       $executive->name = $request->full_name;
        $executive->designation = $request->designation;
//         //  //  if($request->hasfile('file'))
//         //  // {

//         //  //    foreach($request->file('file') as $image)
//         //  //    {
//         //  //        $name=$image->getClientOriginalName();
//         //  //        $image->move(public_path().'/images/', $name);  
//         //  //        $data[] = $name;  
//         //  //    }
//         //  // }

//         //  // $executive->file=json_encode($data);
         
        
//         // // $photo->save();

//         // return back()->with('success', 'Your images has been successfully');
//         $data = $request->input('file');
// $executive->file = $request->file('file')->getClientOriginalName();
// $destination = base_path() . '/public/img';
// $request->file('file')->move($destination, $executive);

        if ($request->hasFile('file')) {
    $data = $request->input('file');
$photo = $request->file('file')->getClientOriginalName();
$destination = base_path() . '/public/img';
$request->file('file')->move($destination, $photo);
}
         $executive->date_of_birth = $request->date_of_birth;
         $executive->father_name = $request->father;
          $executive->mother_name = $request->mother;
           $executive->gender = $request->gender;
            $executive->marital = $request->marital;
             $executive->p_district = $request->p_district;
              $executive->p_area = $request->p_area;
               $executive->p_street = $request->p_street;
                 $executive->t_district = $request->t_district;
              $executive->t_area = $request->t_area;
               $executive->t_street = $request->t_street;
               $executive->p_occupation = $request->p_occupation;
                $executive->s_occupation = $request->s_occupation;
                 $executive->skills = $request->skills;
                  $executive->phone = $request->p_number;
                   $executive->email = $request->email;
                   $executive->available_time = $request->a_time;
                   $executive->available_area = $request->a_area;
                   $executive->language = $request->language;
                   $executive->work = $request->work;
                   $executive->overview = $request->overview;

                   $executive->save();



}

    /**
     * Display the specified resource.
     *
     * @param  \App\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function show(Executive $executive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function edit(Executive $executive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Executive $executive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Executive $executive)
    {
        //
    }
}
