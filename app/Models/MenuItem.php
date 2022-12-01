<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\MenuItem
 *
 * @method static \Database\Factories\MenuItemFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem query()
 * @mixin \Eloquent
 */
class MenuItem extends Model
{
    use HasFactory, Enable,  HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'status'
    ];
}
