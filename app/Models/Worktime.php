<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worktime extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'day',
        'from',
        'to',
        'status',
    ];

    protected $guarded= [];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }


}
