<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Offer extends Model implements TranslatableContract
{
    use HasFactory,     Translatable;


    protected $fillable= ['doctor_id', 'discount', 'image'];

    public $translatedAttributes = ['title', 'content'];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
