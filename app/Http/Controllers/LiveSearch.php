<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('pageTemplate.liveSearch');
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


        <div id=AdContainer>
        <div id=AdImage>
        <img src="/storage/img/petcare_ad.png">
        </div>

        <div id=AdHeader>
            <h4>'.$row->title.'</h4>
        </div>

        <div id=AdPrice>
            <p>$'.$row->price.' per day</p>
        </div>

        <div id=AdLocation>
            <p>'.$row->location.'</p>
        </div>
        
        <div id=AdContent>
            <p>'.$row->description.'</p>
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
