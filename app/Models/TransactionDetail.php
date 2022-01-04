<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'games_id'
    ];

    public function header(){
        return $this->belongsTo(TransactionHeader::class);
    }

    public function game(){
        return $this->belongsTo(Games::class, 'games_id');
    }
}
