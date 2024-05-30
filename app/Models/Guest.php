<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'room_id',
        'image',
        'nama_tamu',
        'status'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
