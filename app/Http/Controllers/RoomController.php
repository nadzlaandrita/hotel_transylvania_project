<?php

namespace App\Http\Controllers;

use App\Models\CategoryRoom;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{

    public function loadRoomPage($id){

        // dd($id);
        $category_data = CategoryRoom::find($id);
        $room_data = Room::all()->where('category_id', '=', $category_data->id);
        
        // dd($category_data);
        if(Auth::user()->role == 'admin'){
            return view('admin.detail-category', [
                'room_data' => $room_data,
                'category_data' => $category_data
            ]);
        }else{
            return view('member.detail-category', [
                'room_data' => $room_data,
                'category_data' => $category_data
            ]);
        }

        // return abort(401);
    }


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
        return redirect('/home');
    }

    public function loadDetailRoom($id){
        $room_data = DB::table('rooms')->get()->where('id', $id);

        if($room_data->contains('id', $id)){

            if(Auth::user()->role == 'admin'){
                return view('admin.a-detailroom', [
                    'room_data' => $room_data
                ]);
            }else{
                return view('member.m-detailroom', [
                    'room_data' => $room_data
                ]);
            }

        }else{
            return abort(404);
        }

    }
    
}
