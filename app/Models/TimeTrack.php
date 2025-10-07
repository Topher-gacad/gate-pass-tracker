<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTrack extends Model
{
    /** @use HasFactory<\Database\Factories\TimeTrackFactory> */
    use HasFactory;

    protected $fillable = ['User_id', 'Reason', 'Location', 'Type'];
}
