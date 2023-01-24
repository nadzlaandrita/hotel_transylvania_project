<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryRoom extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'category_name',
        'available'
    ];

    public function room(){
        return $this->hasMany(Room::class, 'category_id', 'id');
    }
}
