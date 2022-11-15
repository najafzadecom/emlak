<?php

namespace App\Models;

use App\Traits\Enable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory, Enable;

    protected $fillable = [
        'status'
    ];

    public function announcement(): BelongsTo
    {
        return  $this->belongsTo(Announcement::class, 'announcement_id');
    }
}
