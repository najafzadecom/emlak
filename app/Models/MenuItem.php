<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MenuItem extends Model
{
    use HasFactory, Enable,  HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'status'
    ];
}
