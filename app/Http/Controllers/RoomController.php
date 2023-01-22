<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    
    public function insertRoom(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|in:Regular, Luxury, Penthouse',
            'name' => 'required|min:5|max:20',
            'desc' => 'required|min:5|max:100',
            'price' => 'required|integer|min:10000'
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();

        $path = $request->image->move('images/', $imageName);

        Room::insert([
            'image' => $path,
            'category' => $request->category,
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price
        ]);

        return redirect ('/');

    }

    public function deleteRoom($id){

        $room = Room::find($id);
        $room->delete();
        return redirect('/');
    }

    
}
