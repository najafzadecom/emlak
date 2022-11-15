<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class District extends Model
{
    use HasFactory, Enable,  HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'status'
    ];

    public function city(): BelongsTo
    {
        return  $this->belongsTo(City::class, 'city_id');
    }
}
