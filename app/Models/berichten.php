<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berichten extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel', 'content'
    ];
}
