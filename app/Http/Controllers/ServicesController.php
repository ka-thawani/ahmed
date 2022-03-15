<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function check()
    {
        return Auth::id();
    }


    public function displayName($name)
    {
        $data['id'] = $name;
        $data['price'] = 220;
        return view('services', $data);
    }
   
    public function displayService($name)
    {
        return "This is $name";
    }
}
