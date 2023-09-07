<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keep;

class PageController extends Controller
{
    public function gethome()
    {
       return view ('home');
    }

    public function index()
    {
        return view('take');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     =>  'required | min:3',
            'content'   =>  'required | min:10'
        ]);

        $keep = new Keep;
        $keep->title    =   $request->title;
        $keep->content    =   $request->content;

        $keep->save();

        return redirect()->back()->with('status', 'Created!');
    }

    public function getedit()
    {
        return view ('edit');
    }
}  
