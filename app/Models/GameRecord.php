<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameRecord extends Model
{

    protected $fillable = ['login', 'game_type', 'value'];
}
