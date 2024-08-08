<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    // Specify the table if it's not the pluralized form of the model name
    protected $table = 'admins';

    // Specify the fillable attributes
    protected $guarded = [];
}
