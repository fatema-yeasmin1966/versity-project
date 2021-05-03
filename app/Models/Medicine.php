<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'company',
        'image',
        'slug',
    ];

    public function order_items(){
        return $this->hasMany(MedicineOrderItem::class, 'medicine_id', 'id');
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        static::deleting(function($medicine) { // before delete() method call this
            $medicine->order_items()->delete();
            // do the rest of the cleanup...
        });
    }
}
