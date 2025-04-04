<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            $table->text('terms_conditions')->nullable();
            $table->text('privacy_cookies')->nullable();
            $table->text('seo_header')->nullable();
            $table->text('seo_body')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
