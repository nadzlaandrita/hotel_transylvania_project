<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function loadProfile(){

        $user_data = DB::table('users')->where('id', '=', Auth::user()->id)->get();

        // dd($user_data);

        if(Auth::user()->role == 'admin'){
            return view('admin.profile-admin', [
                'user_data' => $user_data
            ]);
        }else{
            return view('member.profile-member', [
                'user_data' => $user_data
            ]);
        }
        
    }
}
