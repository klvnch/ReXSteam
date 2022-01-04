<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'status'
    ];

    public function user(){
        return $this->belongsToMany(User::class, 'friends', 'id', 'sender_id');
        // return $this->hasMany(User::class, 'id');
    }
}
