<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory, Enable;

    public array $translatable = ['name'];

    protected $fillable = [
        'status'
    ];

    public function regions(): HasMany
    {
        return  $this->hasMany(Region::class, 'country_id');
    }

    public function cities(): HasMany
    {
        return  $this->hasMany(City::class, 'country_id');
    }
}
