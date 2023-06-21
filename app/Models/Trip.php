<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'train_id',
    ];

    public function train()
    {
        return $this->belongsTo(Train::class);
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
