<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    protected $fillable = [
        'picture',
        'cover',
        'description',
        'link'
    ];
}
