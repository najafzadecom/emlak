<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Target
 *
 * @method static \Database\Factories\TargetFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Target newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Target newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Target query()
 * @mixin \Eloquent
 */
class Target extends Model
{
    use HasFactory, Enable, HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
    ];
}
