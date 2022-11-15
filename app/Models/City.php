<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use  Spatie\Translatable\HasTranslations;

class City extends Model
{
    use HasFactory, Enable,  HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'status'
    ];

    public function country(): BelongsTo
    {
        return  $this->belongsTo(Country::class, 'country_id');
    }

    public function region(): BelongsTo
    {
        return  $this->belongsTo(Region::class, 'region_id');
    }
}
