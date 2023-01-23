<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart(Request $request, $room_id){
        Room::find($request->room_id);

        $request->validate([
            'checkin_date' => 'required|date|date_format:Y-m-d H:i:s',
            'checkout_date' => 'required|date|date_format:Y-m-d H:i:s|after:checkin_date'
        ]);

        $cart_data = Cart::all()->where('user_id', '=', Auth::user()->id)->where('room_id', '=', $room_id)->first();

        if($cart_data == null){
            Cart::insert([
                'user_id' => Auth::user()->id,
                'room_id' => $room_id,
                'booked_from' => $request->checkin_date,
                'booked_until' => $request->checkout_date
            ]);
        }

        return redirect('/');

    }

    public function removeCart($room_id){
        $cart_data = Cart::where('room_id', '=', $room_id);
        $cart_data->delete();
        return redirect ('/');
    }

    public function editCart(Request $request, $room_id){
        Room::find($request->room_id);

        $request->validate([
            'checkin_date' => 'required|date|date_format:Y-m-d H:i:s',
            'checkout_date' => 'required|date|date_format:Y-m-d H:i:s|after:checkin_date'
        ]);

        $cart_data = Cart::all()->where('user_id', '=', Auth::user()->id)->where('room_id', '=', $room_id)->first();

        $cart_data->update([
            'booked_from' => $request->checkin_date,
            'booked_until' => $request->checkout_date
        ]);

        return redirect('/');
    }

    
}
