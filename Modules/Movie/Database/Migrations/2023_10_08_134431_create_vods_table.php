<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_id');
            $table->string('position')->nullable();
            $table->string('name');
            $table->string('url');
            $table->string('short_description');
            $table->text('description')->nullable();
            $table->morphs('categorizable');
            $table->boolean('favorite')->default(false);
            $table->decimal('price', 8, 2);
            $table->boolean('bought')->default(false);
            $table->timestamps();

            $table->index(['name','price','favorite','bought']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vods');
    }
};
