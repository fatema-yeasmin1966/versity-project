<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
    ];

    public function items(){
        return $this->hasMany(MedicineOrderItem::class, 'order_id', 'id');
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        static::deleting(function($order) { // before delete() method call this
            $order->items()->delete();
            // do the rest of the cleanup...
        });
    }
}
