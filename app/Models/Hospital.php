<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Hospital extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $fillable= ['image', 'featured'];

    public $translatedAttributes = ['title'];


    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
