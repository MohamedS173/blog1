<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class contr extends Controller
{
    // view the index page by contr
    
    

    public function show1()
    {
        $users = User::where('name','like','%mo%')->get();
        // dd($users);
        return view('index');
 
    }
    public function show2()
    {
        return view('contact');
 
    }
    public function show3()
    {
        return view('bulb');
 
    }
    public function show4()
    {
        return view('blog');
 
    }
    public function show5()
    {
        return view('about');
 
    }

    
}
