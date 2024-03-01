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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jobs_id')->unsigned();
            $table->string('name', 200);
            $table->string('email', 100)->nullable();
            $table->string('phone', 50)->nullable();
            $table->integer('year')->nullable();
            $table->userstamps();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('jobs_id')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
