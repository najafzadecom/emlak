<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Agent
 *
 * @mixin Builder
 * @method static \Database\Factories\AgentFactory factory(...$parameters)
 * @method static Builder|Agent newModelQuery()
 * @method static Builder|Agent newQuery()
 * @method static Builder|Agent query()
 */

class Agent extends Model
{
    use HasFactory, Enable;

    protected $fillable = [
        'status'
    ];
}
