<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PromoCode
 *
 * @method static \Database\Factories\PromoCodeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PromoCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PromoCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PromoCode query()
 * @mixin \Eloquent
 */
class PromoCode extends Model
{
    use HasFactory, Enable;

    protected $fillable = [
    ];
}
