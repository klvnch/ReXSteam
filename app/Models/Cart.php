<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'games_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }

    public function game(){
        return $this->belongsTo(Games::class, 'games_id');
    }
}
