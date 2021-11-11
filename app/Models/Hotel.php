<?php

namespace App\Models;

use App\Models\HotelReview;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'rating',
        'address',
        'supplier',
        'status',
    ];

    /**
     * Get the reviews for the hotel.
     */
    public function reviews()
    {
        return $this->hasMany(HotelReview::class);
    }
}
