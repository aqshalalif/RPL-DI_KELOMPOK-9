<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'travels';
    
    protected $fillable = [
        'name',
        'origin',
        'destination',
        'departure_date',
        'travel_status'
    ];

    protected $hidden = [
        
    ];
}
