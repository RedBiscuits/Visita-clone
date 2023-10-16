<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Rays extends Model  implements TranslatableContract
{

    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'content'];

    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Rayscategory::class, 'category_id');
    }

    public function lab()
    {
        return $this->belongsTo(Lab::class, 'lab_id');
    }
}
