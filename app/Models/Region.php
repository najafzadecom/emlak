<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Region
 *
 * @property-read \App\Models\Country|null $country
 * @method static \Database\Factories\RegionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @mixin \Eloquent
 */
class Region extends Model
{
    use HasFactory, Enable, HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
    ];

    public function country(): BelongsTo
    {
        return  $this->belongsTo(Country::class, 'country_id');
    }
}
