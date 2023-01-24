<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'image'
    ];

    public function user(){
        return $this->belongsToMany(User::class, 'carts', 'room_id', 'user_id');
    }

    public function transaction(){
        return $this->belongsToMany(Transaction::class, 'transaction_details', 'room_id', 'transaction_id');
    }

    public function category(){
        return $this->belongsTo(CategoryRoom::class);
    }
    
}
