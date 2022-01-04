<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;
    protected $guard =['id'];

    protected $fillable = [
        'category_id',
        'title',
        'adultonly'
    ];

    public function categories(){
        return $this->belongsTo(GameCategory::class, 'category_id');
    }
    public function gameDetails(){
        return $this->hasOne(GameDetails::class);
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }
    public function detail(){
        return $this->hasMany(TransactionDetail::class);
    }
}
