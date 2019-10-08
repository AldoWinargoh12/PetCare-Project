<?php

namespace App\Http\Controllers;

use App\Registerpet;
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
        $registerpets = Registerpet::all();
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
        Registerpet::create($request->all());
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
