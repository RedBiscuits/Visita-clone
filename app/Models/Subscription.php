<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'package_id',
        'payment_id',
        'expire_date',
        'start_date',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

}
