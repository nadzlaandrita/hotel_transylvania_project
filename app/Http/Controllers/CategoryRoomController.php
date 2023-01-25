<?php

namespace App\Http\Controllers;

use App\Models\CategoryRoom;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryRoomController extends Controller
{
    public function loadHome(){

        $category_data = CategoryRoom::all();
        $room_data = Room::all();

        if(Auth::user()->role == 'admin'){
            return view('admin.home-admin', [
                'category_data' => $category_data,
                'room_data' => $room_data
            ]);
        }else{
            return view('member.home-member', [
                'category_data' => $category_data,
                'room_data' => $room_data
            ]);
        }


    }
    public function welcomeHome(){

        $category_data = CategoryRoom::all();
        $room_data = Room::all();

        return view('welcome', [
            'category_data' => $category_data,
            'room_data' => $room_data
        ]);
    }


}
