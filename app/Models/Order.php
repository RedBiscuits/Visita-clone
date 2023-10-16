<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_items')->withPivot('quantity');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }


    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }



    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }


}
