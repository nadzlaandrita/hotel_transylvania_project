<?php

namespace App\Http\Controllers;

use App\Models\CategoryRoom;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function loadInsertPage(){

        $category_data = CategoryRoom::all();
        
        return view('admin.add-room', [
            'category_data' => $category_data
        ]);
    }
    
    public function insertRoom(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required',
            'name' => 'required|min:5|max:20',
            'desc' => 'required|min:5|max:100',
            'price' => 'required|integer|min:10000'
        ]);

        $category_data = CategoryRoom::where('category_name', '=', $request->category)->first();

        $imageName = time().'.'.$request->image->getClientOriginalExtension();

        $path = $request->image->move('images/', $imageName);

        Room::insert([
            'image' => $path,
            'category_id' => $category_data->id,
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price
        ]);

        return redirect ('/home');

    }

    public function deleteRoom($id){

        $room = Room::find($id);
        $room->delete();
        return redirect('/');
    }

    
}
