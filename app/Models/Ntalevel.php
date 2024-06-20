<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ntalevel extends Model
{
    protected $fillable = [
        'name',
    ];
    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }
}
