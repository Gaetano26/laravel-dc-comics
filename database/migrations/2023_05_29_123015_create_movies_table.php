<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('title', 255)->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('thumb', 255)->nullable(false);
            $table->string('price', 255)->nullable(false);
            $table->string('series', 255)->nullable(false);
            $table->string('sale_date', 255)->nullable(false);
            $table->string('type', 255)->nullable(false);
            $table->string('artists', 255)->nullable(false);
            $table->string('writers', 255)->nullable(false);
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
        Schema::dropIfExists('movies');
    }
};
