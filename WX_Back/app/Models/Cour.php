<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperCour
 */
class Cour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'isFree',
        'date_creation',
        'status',
    ];
    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function Lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
