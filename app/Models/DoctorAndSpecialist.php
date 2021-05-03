<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAndSpecialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'specialist_id',
    ];

    public function specialist(){
        return $this->belongsTo(Specialist::class, 'specialist_id', 'id');
    }

    public function doctor(){
        return $this->belongsTo(User::class, 'doctor_id', 'id');
    }
}
