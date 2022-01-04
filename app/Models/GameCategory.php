<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCategory extends Model
{
    use HasFactory;
    protected $guard =['id'];

    public function games(){
        return $this->hasMany(Games::class);
    }
}
