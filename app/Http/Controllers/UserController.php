<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexuser()
    {
        $con = Service::all();
        $data =compact('con');
        return view('User.Service')->with($data);
    }

    public function aboutuser()
    {
        
        return view('User.about');
    }


    public function Home()
    {
        
        return view('User.index');
    }
}
