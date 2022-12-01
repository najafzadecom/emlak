<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Announcement
 *
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\City|null $city
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\Currency|null $currency
 * @property-read \App\Models\Customer|null $customer
 * @property-read \App\Models\District|null $district
 * @property-read \App\Models\Metro|null $metro
 * @property-read \App\Models\Region|null $region
 * @property-read \App\Models\Target|null $target
 * @property-read \App\Models\Village|null $village
 * @method static \Database\Factories\AnnouncementFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement query()
 * @mixin \Eloquent
 */
class Announcement extends Model
{
    use HasFactory, Enable, HasTranslations, HasSlug;

    public array $translatable = ['description'];

    protected $fillable = [
        'status'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->usingSeparator('_');
    }

    public function category(): BelongsTo
    {
        return  $this->belongsTo(Category::class, 'category_id');
    }

    public function country(): BelongsTo
    {
        return  $this->belongsTo(Country::class, 'country_id');
    }

    public function city(): BelongsTo
    {
        return  $this->belongsTo(City::class, 'city_id');
    }

    public function region(): BelongsTo
    {
        return  $this->belongsTo(Region::class, 'region_id');
    }

    public function district(): BelongsTo
    {
        return  $this->belongsTo(District::class, 'district_id');
    }

    public function village(): BelongsTo
    {
        return  $this->belongsTo(Village::class, 'village_id');
    }

    public function target(): BelongsTo
    {
        return  $this->belongsTo(Target::class, 'target_id');
    }

    public function metro(): BelongsTo
    {
        return  $this->belongsTo(Metro::class, 'metro_id');
    }

    public function customer(): BelongsTo
    {
        return  $this->belongsTo(Customer::class, 'customer_id');
    }

    public function company(): BelongsTo
    {
        return  $this->belongsTo(Company::class, 'company_id');
    }

    public function currency(): BelongsTo
    {
        return  $this->belongsTo(Currency::class, 'currency_id');
    }

    public function comments(): HasMany
    {
        return  $this->hasMany(Comment::class, 'announcement_id');
    }
}
