<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineOrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'medicine_id',
        'order_id',
    ];

    public function order(){
        return $this->belongsTo(MedicineOrder::class, 'order_id', 'id');
    }

    public function medicine(){
        return $this->belongsTo(Medicine::class, 'medicine_id', 'id');
    }
}
