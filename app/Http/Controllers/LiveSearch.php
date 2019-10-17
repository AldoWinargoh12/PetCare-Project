<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('advertisement.liveSearch');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('advertisements')
         ->where('title', 'like', '%'.$query.'%')
         ->orWhere('price', 'like', '%'.$query.'%')
         ->orWhere('location', 'like', '%'.$query.'%')
         ->orWhere('description', 'like', '%'.$query.'%')
         ->orWhere('duration', 'like', '%'.$query.'%')
         ->orWhere('startdate', 'like', '%'.$query.'%')
         ->orWhere('username', 'like', '%'.$query.'%')
         ->orderBy('id')
         ->get();
         
      }
      else
      {
       $data = DB::table('advertisements')
         ->orderBy('id')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '


        <div class="card-columns d-inline align-middle" id="adcol">
            <div class="card mb-3" style="min-width: 300px; max-width: 675px; text-align:center;">
                <div class="row no-gutters">
                    <div class="col-md-4 align-self-center" >  
                        <img class="card-img-top" id="adpic" src="/storage/img/petcare_ad.png"> 
                    </div>
                    
                    <div class="col-md-8">
                        <div class="card-body">  
                            <h3 id="adTitle" class="card-title">'.$row->title.'</h5>  
                            <p id="adBody" class="card-text">Price: '.$row->price.' per day</p>  
                            <p id="adBody" class="card-text">Duration: '.$row->duration.' day</p> 
                            <p id="adBody" class="card-text">Starting Date: '.$row->startdate.'</p>
                            <p id="adBody" class="card-text">Location: '.$row->location.'</p>
                            <p id="adBody" class="card-text">Created By: '.$row->username.'</p>
                            <p id="adBody" class="card-text">Description: '.$row->description.'</p>
                            <a href="#" class="btn btn-info">See Add</a>  
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
