<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'cid', 'phone', 'nationality', 'dzongkhag', 'gewog', 'village',
        'donation_type', 'payment_platform', 'paid_to_bank', 'journal_no', 'amount', 'remarks',
    ];

    // Add any relationships if necessary
}
