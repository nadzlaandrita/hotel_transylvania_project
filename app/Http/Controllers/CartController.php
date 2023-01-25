<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function loadCartPage(){

        $cart_data= Cart::all()->where('user_id', '=', Auth::user()->id);
        // dd($cart_data[0]->product);

        $total_price = 0;
        foreach($cart_data as $item){
            $booked_until = Carbon::parse($item->booked_until);
            $booked_from = Carbon::parse($item->booked_from);

            $interval = $booked_until->diffInDays($booked_from);
            $total_price += $item->room->price * $interval;
        }

        return view('member.cart-member', [
            'cart_data' => $cart_data,
            'total_price' => $total_price
        ]);

    }
    public function addCart(Request $request, $room_id){
        Room::find($request->room_id);

        $request->validate([
            'checkin_date' => 'required|date|',
            'checkout_date' => 'required|date|after:checkin_date'
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

        return redirect('/cart');

    }

    public function removeCart($room_id){
        $cart_data = Cart::where('room_id', '=', $room_id);
        $cart_data->delete();
        return redirect ('/cart');
    }

    public function loadUpdateCart($room_id){
        $item = Cart::all()->where('user_id', '=', Auth::user()->id)->where('room_id', '=', $room_id);
        // dd($item);
        return view('member.updatetransaction', [
            'item' => $item
        ]);
    }

    public function updateCart(Request $request, $room_id){
        Room::find($request->room_id);

        $request->validate([
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date|after:checkin_date'
        ]);

        $cart_data = Cart::all()->where('user_id', '=', Auth::user()->id)->where('room_id', '=', $room_id)->first();

        $cart_data->update([
            'booked_from' => $request->checkin_date,
            'booked_until' => $request->checkout_date
        ]);

        return redirect('/cart');
    }

    
}
