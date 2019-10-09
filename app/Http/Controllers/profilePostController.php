<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilePostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function create()
    {
        return view('profilePost');
    }
    public function store(Request $request)
    {
        $profilePost = new ProfilePost;
        $profilePost->title= $request->get('title');
        $profilePost->body= $request->get('body');

        $profilePost->save();
        return redirect('viewPost');
    }
    public function index()
    {
        $viewPost = profilePost::all();
        return view('viewComment', compact('profilePost'));
    }
    public function show($id)
    {
        $profilePost = profilePost::find($id);
        return view ('view',compact('profilePost'));
    }
}
