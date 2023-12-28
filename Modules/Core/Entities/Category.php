<?php

namespace Modules\Core\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Movie\Entities\Movie;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Category extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'creator_id',
        'name',
        'short_description',
        'description',
        'type',
        'categorizable_id',
        'categorizable_type'
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
     * @return MorphToMany
     */
    public function movies(): MorphToMany
    {
        return $this->morphedByMany(Movie::class, 'categorizable');
    }

    /**
     * @return LogOptions
     */
    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
