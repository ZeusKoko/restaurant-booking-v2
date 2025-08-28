<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
    'user_id',
    'date',
    'time',
    'guests',
    'name',
    'contact',
    'status',
];
// app/Models/Reservation.php

public function user()
{
    return $this->belongsTo(User::class);
}

}

