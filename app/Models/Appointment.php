<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_id',
        'date',
        'name',
        'email',
        'phone',
        'completed',
    ];

    public function schedule(){
        return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
    }
}
