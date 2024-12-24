<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperModule
 */
class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cour_id',
        'date_creation',
    ];

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function cour(): BelongsTo
    {
        return $this->belongsTo(Cour::class);
    }
}
