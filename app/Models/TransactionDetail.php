<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
