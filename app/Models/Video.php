<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    protected $fillable = [
        'type',
        'path',
        'course_id',
        'ntalevel_id',
        'users_id',
        'title',
        'user_id'

    ];

    protected function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    protected function ntalevel(): BelongsTo
    {
        return $this->belongsTo(Ntalevel::class);
    }
}
