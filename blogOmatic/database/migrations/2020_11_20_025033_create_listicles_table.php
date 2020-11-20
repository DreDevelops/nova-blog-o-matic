<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title', 200)->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->boolean('published')->nullable();
            $table->softDeletes('deleted_at', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listicles');
    }
}
