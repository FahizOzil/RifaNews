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
        Schema::create('posts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('post_title');
        //     $table->text('description');
        //     $table->unsignedBigInteger('category');
        //     $table->integer('author')->default(1);
        //     $table->string('post_img');
        //     $table->timestamps();

        //   $table->foreign('category')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
