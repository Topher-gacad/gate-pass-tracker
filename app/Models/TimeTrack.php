<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeTrack extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'User_id',
        'Reason',
        'Location',
        'Type',
    ];
}
