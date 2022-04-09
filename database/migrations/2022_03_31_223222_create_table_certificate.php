<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_types', function (Blueprint $table) {
            $table->id();
            $table->string('alias')->unique();
            $table->string('name')->nullable();
            $table->string('total_marks')->nullable();
            $table->boolean('has_module')->default(false);
            $table->uuid('guid')->unique();
        });

        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');

            $table->string('listening')->nullable();
            $table->string('reading')->nullable();
            $table->string('language_module')->nullable();
            $table->string('writing')->nullable();
            $table->string('oral')->nullable();
            $table->uuid('guid')->unique();
            $table->unsignedBigInteger('certificate_type_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->cascadeOnUpdate();
            $table->foreign('certificate_type_id')->references('id')->on('certificates')->cascadeOnUpdate();
            $table->foreign('updated_by')->references('id')->on('users')->cascadeOnUpdate();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnUpdate();
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
        Schema::dropIfExists('certificate_types');
        Schema::dropIfExists('certificates');

    }
};
