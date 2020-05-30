<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyBio;

class MyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myBio = MyBio::first();

        return view('admin.my-profile.index', compact('myBio'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();

        if(MyBio::first() == null) {

            (isset($input['photo_profile'])) ? $namaProfile = str_random().'.'.$input['photo_profile']->getClientOriginalExtension() : $namaProfile = null;

            (isset($input['photo_background'])) ? $namaBackground = str_random().'.'.$input['photo_background']->getClientOriginalExtension() : $namaBackground = null;
            
            MyBio::create([
                'study' => $input['study'],
                'hobby' => $input['hobby'],
                'photo_profile' => $namaProfile,
                'photo_background' => $namaBackground,
                'ig' => $input['ig'],
                'twitter' => $input['twitter']
            ]);

            (isset($input['photo_profile'])) ? $input['photo_profile']->move(public_path('mybio'), $namaProfile) : null ;

            (isset($input['photo_background'])) ? $input['photo_background']->move(public_path('mybio'), $namaBackground) : null ;

        }else{
            $myBio = MyBio::first();
            
            if (isset($input['photo_profile'])) {
                $namaProfile = str_random().'.'.$input['photo_profile']->getClientOriginalExtension();
                
                if (isset($myBio->photo_profile)) {
                    unlink(public_path('mybio/'.$myBio->photo_profile));
                }

                $input['photo_profile']->move(public_path('mybio'), $namaProfile);

                $myBio->update([
                    'photo_profile' => $namaProfile
                ]);

            }

            if(isset($input['photo_background'])){
                
                $namaBackground = str_random().'.'.$input['photo_background']->getClientOriginalExtension();

                if (isset($myBio->photo_background)) {
                    unlink(public_path('mybio/'.$myBio->photo_background));
                }

                $input['photo_background']->move(public_path('mybio'), $namaBackground);

                $myBio->update([
                    'photo_background' => $namaBackground
                ]);
            }
            
            $myBio->update([
                'study' => $input['study'],
                'hobby' => $input['hobby'],
                'ig' => $input['ig'],
                'twitter' => $input['twitter']
            ]);

            return redirect('admin/my-profile');
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
