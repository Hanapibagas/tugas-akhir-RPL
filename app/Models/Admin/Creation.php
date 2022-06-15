<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    protected $fillable = [
        'cover',
        'description',
        'link',
        'picture',
    ];
}
