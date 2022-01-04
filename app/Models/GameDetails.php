<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameDetails extends Model
{
    use HasFactory;
    protected $guard =['id'];

    protected $fillable = [
        'games_id',
        'imgurl',
        'vidurl',
        'description',
        'developer',
        'publisher',
        'releasedate',
        'price'
    ];

    public function games(){
        return $this->belongsTo(Games::class);
    }
}
