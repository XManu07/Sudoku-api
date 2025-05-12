<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SudokuPuzzle extends Model
{
    protected $fillable = [
        'puzzle',
        'solution',
        'difficulty_id',
    ];
    function difficulty()
    {
        return $this->belongsTo(Difficulty::class);
    }
}
