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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('job_post_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('form_Phone');
            $table->string('form_Email');
            $table->text('form_message');
            $table->string('fileToUpload');
            $table->foreign('job_post_id')->references('id')->on('job_posts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
