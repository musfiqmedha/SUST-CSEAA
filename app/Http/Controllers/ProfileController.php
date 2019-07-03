<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User;
use App\Profile;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           // $profiles = DB::table('profiles')->get();
        $profiles = Profile::where('user_id', Auth::user()->id)->first();

       

      return view('alumni.profile', compact('profiles'));
    }


    public function editProfile()
    {

        $profiles = Profile::where('user_id', Auth::user()->id)->first();
        return view('alumni.edit', compact('profiles'));

         
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
        //
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
       // $user=Auth::user()->id
        // return view('alumni.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
     

         $this->validate(request(), [
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            'full_name' => 'required',
            'gender' => 'required',
            'marital' => 'required',
            'address' => 'required',
            'skills' => 'required',
            'phone' => 'required',
            'language' => 'required',
            'available' => 'required',
            'overview' => 'required'
        ]);


         $file = $request->file('pic');
     // $path = 'public/com_img';
     $filename = $file->getClientOriginalName();
      $file->move(public_path().'/profile_img/', $filename);
      $profile = Profile::where('user_id', Auth::user()->id)->first();

        // $profile = new Profile();
      if(is_null($profile)){
        $profile = new Profile();
     
        $profile->user_id = Auth::user()->id;


        $profile->pic = $filename;
         $profile->full_name = $request->full_name;
        $profile->gender = $request->gender;
          $profile->marital = $request->marital;
        $profile->address = $request->address;
          $profile->skills = $request->skills;
        $profile->phone = $request->phone;

          $profile->language = $request->language;
        $profile->available = $request->available;
         $profile->overview = $request->overview;

        
        
        



        $profile->save();
        return back()->with('success', 'Your Profile Updated');

      // return view('alumni.profile');
    }

    else
    {
         $profile = Profile::where('user_id', Auth::user()->id)->first();
        
        $profile->user_id = Auth::user()->id;


        $profile->pic = $filename;
         $profile->full_name = $request->full_name;
        $profile->gender = $request->gender;
          $profile->marital = $request->marital;
        $profile->address = $request->address;
          $profile->skills = $request->skills;
        $profile->phone = $request->phone;

          $profile->language = $request->language;
        $profile->available = $request->available;
         $profile->overview = $request->overview;

        
        $profile->save();
        // return view('alumni.profile');

        return back()->with('success', 'Your Profile Updated');

    }
    


   
       

        
    
           
       
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
