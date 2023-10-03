<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        return view('clients.index');
    }
    public function contractpage(){
        return view('clients.contract');
    }
}
