<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'RoomType',
        'GuessName',
        'contactNo',
        'check_in',
        'check_out',
    ];
}