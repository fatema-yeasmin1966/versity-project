<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function doctors(){
        return $this->hasMany(DoctorAndSpecialist::class, 'specialist_id', 'id');
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        static::deleting(function($specialist) { // before delete() method call this
            $specialist->doctors()->delete();
            // do the rest of the cleanup...
        });
    }
}
