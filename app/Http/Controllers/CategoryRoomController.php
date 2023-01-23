<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryRoomController extends Controller
{
    public function loadHome(){

        if(Auth::user()->role == 'admin'){
            return view('admin.home-admin');
        }else{
            return view('member.home-member');
        }
        
    }

    
}
