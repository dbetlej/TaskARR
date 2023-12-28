<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('creator_id')->constrained('users');
            $table->string('name');
            $table->string('url')->nullable();
            $table->string('short_description');
            $table->text('description')->nullable();
            $table->enum('visibility', VisibilityStatus::toArray())->default(VisibilityStatus::private());
            $table->boolean('favorite')->default(false);
            $table->boolean('to_watch')->default(false);
            $table->integer('movie_position')->nullable();
            $table->integer('seasons')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['name','url','visibility','favorite','movie_position']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
};
