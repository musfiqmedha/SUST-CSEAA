<?php

namespace App\Http\Controllers;

use App\Pastleader;
use Illuminate\Http\Request;
use DB;
class PastleaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pastleader');
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

    public function getLeader()
    {

         $pastleaders = DB::table('pastleaders')->get();

        return view('show.showpast', compact('pastleaders'));
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
    
           'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        
        $file = $request->file('filename');
     // $path = 'public/com_img';
     $filename = $file->getClientOriginalName();
      $file->move(public_path().'/leader_img/', $filename);

         $past= new Pastleader();
         $past->name = $request->full_name;
         $past->image= $filename;
    
       
         
        
        $past->save();
        
        return back()->with('success', 'Your images has been successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pastleader  $pastleader
     * @return \Illuminate\Http\Response
     */
    public function show(Pastleader $pastleader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pastleader  $pastleader
     * @return \Illuminate\Http\Response
     */
    public function edit(Pastleader $pastleader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pastleader  $pastleader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pastleader $pastleader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pastleader  $pastleader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pastleader $pastleader)
    {
        //
    }
}
