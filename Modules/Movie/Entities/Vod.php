<?php

namespace Modules\Movie\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Entities\Category;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Vod extends Model
{
    use SoftDeletes, LogsActivity;

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'creator_id',
        'position',
        'name',
        'url',
        'short_description',
        'description',
        'favorite',
        'price',
        'bought'
    ];

    /**
     * Relation for user which created movie.
     * @return BelongsTo
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    /**
     * @return HasMany
     */
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }

    /**
     * @return MorphMany
     */
    public function categories(): MorphMany
    {
        return $this->morphMany(Category::class, 'categorizable');
    }

    /**
     * @return MorphTo
     */
    public function tagable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return LogOptions
     */
    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
