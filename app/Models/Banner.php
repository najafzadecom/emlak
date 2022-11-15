<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory, Enable;

    protected $fillable = [
        'status'
    ];
}
