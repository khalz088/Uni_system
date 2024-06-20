<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    protected $fillable = [
        'message' ,
        'user_id',
        'ntalevel_id',
        'course_id',
        'role_id',

    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function ntalevel(): BelongsTo
    {
        return $this->belongsTo(Ntalevel::class);
    }

    protected function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
