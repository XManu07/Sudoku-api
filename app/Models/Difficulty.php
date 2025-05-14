<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    protected $fillable = [
        'name',
    ];
    function sudokus()
    {
        return $this->hasMany(SudokuPuzzle::class);
    }
}
