<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('platform_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('platform_id');
            $table->string('option_name', 50);
            $table->string('option_value', 50);

            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('platform_options');
    }
};
