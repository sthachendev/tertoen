<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'gender',
        'cid',
        'dob',
        'village',
        'geog',
        'dzongkhag',
        'nationality',
        'email',
        'phone',
        'mailingAddress',
        'areasOfInterest',
    ];

    // Additional model logic can be added here if needed
}
