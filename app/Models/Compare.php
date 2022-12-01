<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Compare
 *
 * @method static \Database\Factories\CompareFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Compare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compare query()
 * @mixin \Eloquent
 */
class Compare extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];
}
