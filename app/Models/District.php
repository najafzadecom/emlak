<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\District
 *
 * @property-read \App\Models\City|null $city
 * @method static \Database\Factories\DistrictFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District query()
 * @mixin \Eloquent
 */
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
