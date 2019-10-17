<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = Advertisement::all()->toArray();
        return view('advertisement.showAd', compact('advertisements'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisement.createAd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $username = \Auth::user()->username;
        $email = \Auth::user()->email;

        $this->validate($request,[
        'title'       => 'required',
        'price'       => 'required',
        'location'    => 'required',
        'startdate'    =>'required',
        'duration'    => 'required',
        'description' => 'required'
        ]);

        $advertisements = new Advertisement([
            'title'        =>   $request->get('title'),
            'price'        =>   $request->get('price'),
            'location'     =>   $request->get('location'),
            'startdate'    =>   $request->get('startdate'),
            'duration'     =>   $request->get('duration'),
            'description'  =>   $request->get('description'),
            'email'        =>   $email,
            'username'     =>   $username

        ]);
        $advertisements->save();
        return view('advertisement.createAd');
       // return redirect()->route('pageTemplate.createAd')->with('success', 'Data Added');
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
