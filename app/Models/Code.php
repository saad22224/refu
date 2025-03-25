<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
    protected $casts = [
        'companions' => 'array',
    ];
    protected $fillable = ['code' , 'desc' , 'long' , 'date' , 'company' , 'canada' , 'number' , 'Arrival' , 'time' , 'from' , 'to' , 'Receiver' , 'hotel' , 'contact' , 'companions'];
}
