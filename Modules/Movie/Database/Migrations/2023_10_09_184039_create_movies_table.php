<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Core\Enums\PricingType;
use Modules\Core\Enums\VisibilityStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->foreignId('creator_id')->constrained('users');
            $table->foreignId('quality_id')->constrained('qualities');
            $table->foreignId('series_id')->constrained('series');
            $table->foreignId('vod_id')->nullable()->constrained('vods');
            $table->morphs('categorizable');

            $table->decimal('price', 8, 2)->nullable();
            $table->string('url')->nullable();
            $table->string('short_description');
            $table->text('description')->nullable();
            $table->enum('visibility', VisibilityStatus::toArray())->default(VisibilityStatus::private());
            $table->enum('pricing_type', PricingType::toArray())->default(PricingType::included_with_subscription());

            $table->time('length')->default('00:00:00');
            $table->timestamps();
            $table->softDeletes();

            $table->index([
                'name',
                'url',
                'price',
                'quality_id',
                'visibility'
            ], 'idx_movies_fields');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
