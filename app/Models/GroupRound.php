<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupRound extends Pivot
{
    protected $table = 'group_round_pivot';
    protected $fillable = ['group_id', 'round_id'];
    public $timestamps = false;
}
