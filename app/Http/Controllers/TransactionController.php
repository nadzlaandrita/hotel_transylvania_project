<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function loadTransactionPage(){
        $transaction_data = Transaction::where('user_id', '=', Auth::user()->id)->get();
        // dd($transaction_data);

        return view('member.transaction-member', [
            'transaction_data' => $transaction_data
        ]);
    }

    public function checkout(){
        $user_data = Auth::user()->id;
        $cart_data = Cart::where('user_id', '=', $user_data)->get();

        if($cart_data == null){
            return redirect('/cart');
        }

        
        $total_price = 0;
        foreach($cart_data as $item){
            $booked_until = Carbon::parse($item->booked_until);
            $booked_from = Carbon::parse($item->booked_from);

            $interval = $booked_until->diffInDays($booked_from);
            $total_price += $item->room->price * $interval;
        }

        $transaction_data = new Transaction();
        $transaction_data->user_id = $user_data;
        $transaction_data->total_price = $total_price;
        $transaction_data->save();
        $trans_id = $transaction_data->id;

        foreach($cart_data as $data){
            $booked_until = Carbon::parse($item->booked_until);
            $booked_from = Carbon::parse($item->booked_from);
            $interval = $booked_until->diffInDays($booked_from);
            TransactionDetail::insert([
                'transaction_id' => $trans_id,
                'room_id' => $data->room->id,
                'spend' => $interval,
                'sub_price' => $data->room->price * $interval
            ]);

            DB::table('carts')->where('user_id', '=', $user_data)->delete();
        }

        // dd($transaction_data);

        return redirect('/history');
        
    }
}
