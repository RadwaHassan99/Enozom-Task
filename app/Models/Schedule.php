<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'train_id',
        'station_id',
        'time'
    ];

    public function Train(){
        $this->hasMany(Station::class);
    }
}
