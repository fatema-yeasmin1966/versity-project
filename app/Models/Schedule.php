<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'duration',
        'quantity',
        'day',
        'place',
        'description',
    ];

    public function appointments(){
        return $this->hasMany(Appointment::class, 'schedule_id', 'id');
    }

    public function doctor(){
        return $this->belongsTo(User::class, 'doctor_id', 'id');
    }
}
