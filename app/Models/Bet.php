<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'round_id',
        'home_team',
        'away_team',
        'bet_type',
        'bet_description',
        'link_to_match',
        'result',
    ];
}
