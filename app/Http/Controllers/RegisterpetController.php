<?php

namespace App\Http\Controllers;

use App\Registerpet;
use DB;
use Illuminate\Http\Request;

class RegisterpetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $username = \Auth::user()->username;

        $registerpets = DB::table('registerpets')
         ->where('username', 'like', '%'.$username.'%')
         ->get();
        return view('registerpets.index',compact('registerpets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registerpets.create');
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
        $username = \Auth::user()->username;
        $email = \Auth::user()->email;

        $request -> validate([
            'pet_name' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'gender' => 'required',
            'size' => 'required',
            'microchip_number' => 'required',
            'rabies_number' => 'required',
            'additional_notes' => 'required'
            
        ]);

        $registerpet = new Registerpet([
            'pet_name'          =>   $request->get('pet_name'),
            'species'           =>   $request->get('species'),
            'breed'             =>   $request->get('breed'),
            'gender'            =>   $request->get('gender'),
            'size'              =>   $request->get('size'),
            'microchip_number'  =>   $request->get('microchip_number'),
            'rabies_number'     =>   $request->get('rabies_number'),
            'additional_notes'  =>   $request->get('additional_notes'),
            'email'             =>   $email,
            'username'          =>   $username

        ]);
        $registerpet->save();

        return redirect()->route('registerpets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registerpet  $registerpet
     * @return \Illuminate\Http\Response
     */
    public function show(Registerpet $registerpet)
    {
        //
        return view ('registerpets.show',compact('registerpet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registerpet  $registerpet
     * @return \Illuminate\Http\Response
     */
    public function edit(Registerpet $registerpet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registerpet  $registerpet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registerpet $registerpet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registerpet  $registerpet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registerpet $registerpet)
    {
        //
    }
}
