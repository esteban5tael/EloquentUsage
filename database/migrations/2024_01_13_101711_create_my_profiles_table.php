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
        Schema::create('my_profiles', function (Blueprint $table) {
            /*  */
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');

            $table->string  ('name', 100);
            $table->string  ('lastname', 100);
            $table->string  ('address');
            $table->string  ('phone', 20)->unique();
            $table->string  ('email')->unique();
            $table->boolean ('status');

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
        Schema::dropIfExists('my_profiles');
    }
};
