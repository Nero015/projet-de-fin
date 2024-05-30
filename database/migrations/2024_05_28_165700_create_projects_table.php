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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('member1');
            $table->string('member2');
            $table->string('member3');
            $table->string('enc');
            $table->string('subject');
            $table->string('anne');
            $table->string('LMD');
            $table->string('intro');
            $table->string('url_list');
            $table->string('uploaded_file');
            $table->integer('status'); // 0 for pending, 1 for approved, 2 for rejected
            $table->text('report');
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
