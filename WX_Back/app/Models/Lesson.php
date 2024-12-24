<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperLesson
 */
class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'date_creation',
        'module_id',
        'cour_id',
    ];

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function cour(): BelongsTo
    {
        return $this->belongsTo(Cour::class);
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }
}
