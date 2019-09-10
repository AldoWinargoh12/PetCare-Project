<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        
        $tasks = [
            'task1',
            'task2',
            'task3',
            'task4'
        ];
    
    
        return view('welcome',[
            'tasks' => $tasks,
            'foo' => request('title')
        ]);
    }
    public function about()
    {
        return view('about');
    }
    public function create()
    {
        return view('post');
    }
    
    public function login(Request $request)
    {
        $this -> validate($request,[
            'username' => 'required',
            'password' => 'required'
            
        ]);
        return redirect('/about');
    }
    public function index()
    {
        return view('post');
    }

    
}
