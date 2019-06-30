<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest')->except('logout');
		// test
    }
    public function login(){
        var_dump(Auth::user());
        return view('client.login');
    }
    public function postLogin(Request $req){
        if(Auth::attempt(['name' => $req->account, 'password' => $req->password], $req->remember)){
            return redirect('login');
        }
        else{
            echo 'false';
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
