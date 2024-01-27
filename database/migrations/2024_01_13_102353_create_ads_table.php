<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            /*  */
            $table->id();

            $table->unsignedBigInteger('my_profile_id');
            $table->foreign('my_profile_id')->references('id')->on('my_profiles')->onUpdate('cascade')->onDelete('cascade');

            $table->string('title', 100);
            $table->string('description');
            $table->boolean('status');
            $table->integer('visit');

            $table->timestamps();
            $table->softDeletes();
            /*  */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
