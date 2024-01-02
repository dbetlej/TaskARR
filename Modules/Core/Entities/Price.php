<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Movie\Entities\Movie;
use Modules\Movie\Entities\Vod;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Price extends Model
{
    use SoftDeletes, LogsActivity;

    protected $fillable = [
        'name',
        'price'
    ];

    public function movies()
    {
        return $this->morphedByMany(Movie::class, 'priceable')->withPivot(['name','price']);
    }

    public function vods()
    {
        return $this->morphedByMany(Vod::class, 'priceable')->withPivot(['name','price']);
    }

    /**
     * @return LogOptions
     */
    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
