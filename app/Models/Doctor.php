<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Doctor extends Authenticatable implements JWTSubject, TranslatableContract
{
    use HasFactory, Translatable, Notifiable;

    protected $guarded = [];

    public $translatedAttributes = ['name', 'about'];


    /**
     * Get the user that owns the Doctor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function hospital(): BelongsTo
    {
        return $this->belongsTo(Hospital::class);
    }


    public function worktimes()
    {
        return $this->hasMany(Worktime::class);
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }


    public function apoinments()
    {
        return $this->hasMany(Appoinment::class);
    }


    public function payments()
    {
        return $this->hasMany(Payment::class);
    }


    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }






    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }



}
