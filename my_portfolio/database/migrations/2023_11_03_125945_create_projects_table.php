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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_type');
            $table->string('title')->unique();
            $table->text('description');
            $table->text('image');
            $table->string('project_url');
            $table->string('frontend')->nullable();
            $table->string('backend')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('client_id')->default(0);
            $table->string('others')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
