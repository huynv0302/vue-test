<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        return view('client.home');
    }
}
