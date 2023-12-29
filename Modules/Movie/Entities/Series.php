<?php

namespace Modules\Movie\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Series extends Model
{
    use SoftDeletes, LogsActivity;

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'creator_id',
        'name',
        'url',
        'short_description',
        'description',
        'visibility',
        'seasons'
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
        return $this->hasMany(Movie::class)->orderBy('position');
    }

    /**
     * @return MorphTo
     */
    public function tagable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_series')
            ->withPivot('ignore','favorite','to_watch','watched','position')
            ->withTimestamps();
    }

    /**
     * @return mixed
     */
    public function user(): mixed
    {
        return $this->users()
            ->where('user_id', auth()->id())
            ->withPivot('ignore','favorite','to_watch','watched','position')
            ->first();
    }

    /**
     * @return LogOptions
     */
    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
