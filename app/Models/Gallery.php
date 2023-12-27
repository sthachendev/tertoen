<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['name', 'image'];

    // Specify the custom table name
    protected $table = 'gallery';

    // Additional methods or relationships can be defined here
}

