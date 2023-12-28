<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Movie\Enums\QualityAudio;
use Modules\Movie\Enums\QualityVideo;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('creator_id')->constrained('users');
            $table->enum('quality_video', QualityVideo::toArray())->default(QualityVideo::FHD());
            $table->enum('quality_audio', QualityAudio::toArray())->default(QualityAudio::stereo());
            $table->boolean('hdr')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['quality_video','quality_audio','hdr']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualities');
    }
};
