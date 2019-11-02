<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SelectPetType extends Controller
{
    function index()
    {
     $animals = DB::table('animals')
         ->groupBy('group')
         ->get();
     return view('registerpets.create')->with('animals', $animals);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('animals')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }

}
