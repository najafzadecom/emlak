<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory, Enable;

    public array $translatable = ['name', 'description'];

    protected $fillable = [
        'status'
    ];
}
