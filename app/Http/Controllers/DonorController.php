<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = User::orderby('created_at','desc')->paginate(10);
        return view('donor.indexDonor')->with('donors',$donors);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor = User::find($id);
        if(auth()->user()->id==$donor->id)
            return view('donor.profileDonor')->with('donor', $donor);
        else
            return redirect('/donor');
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
