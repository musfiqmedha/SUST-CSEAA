<?php

namespace App\Http\Controllers;
use App\Committee;
use Illuminate\Http\Request;
use DB;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           
            


        return view('admin.committee');
    }

    public  function getcommittee()
    {
      $committees = DB::table('committees')->get();

        return view('show.showcom', ['committees' => $committees]);
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
       $this->validate($request, [

          'full_name' => 'required |max:255',
          'designation' => 'required |max:255',

          'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
              
       $file = $request->file('filename');
     // $path = 'public/com_img';
     $filename = $file->getClientOriginalName();
      $file->move(public_path().'/com_img/', $filename); 
     // $file->move($path, $filename);
          $committee= new Committee();


         
          $committee->file= $filename;
         $committee->name = $request->full_name;
        $committee->designation = $request->designation;
       
         
        
        $committee->save();

        return back()->with('success', 'Your images has been successfully');

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
