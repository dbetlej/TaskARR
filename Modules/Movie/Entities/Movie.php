<?php

namespace Modules\Movie\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Entities\Category;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Movie extends Model
{
    use SoftDeletes, LogsActivity, LogsActivity;

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'creator_id',
        'quality_id',
        'series_id',
        'vod_id',
        'price',
        'url',
        'short_description',
        'description',
        'visibility',
        'pricing_type',
        'length'
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
     * @return BelongsTo
     */
    public function vod(): BelongsTo
    {
        return $this->belongsTo(Vod::class);
    }

    /**
     * @return MorphToMany
     */
    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    /**
     * @return BelongsTo
     */
    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }

    /**
     * @return BelongsToMany
     */
    public function qualities(): BelongsToMany
    {
        return $this->belongsToMany(Quality::class);
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_movie')
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
     * @return MorphTo
     */
    public function tagable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeOwned($query)
    {
        return $query->where('creator_id', auth()->user());
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeBrought($query): mixed
    {
        return $query->whereHas('vod', function ($query) {
            $query->where('brought', true);
        });
    }

    /**
     * @param $query
     * @param $seriesId
     * @return mixed
     */
    public function scopeSeriesMovies($query, $seriesId): mixed
    {
        return $query->whereHas('series', function($query) use ($seriesId) {
            $query->where('id', $seriesId);
        });
    }

    /**
     * @return LogOptions
     */
    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
