<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameBlocks extends Model
{
    protected $fillable = [
        'x',
        'y',
        'width',
        'height',
        'color',
        'is_clicked'
    ];
}
