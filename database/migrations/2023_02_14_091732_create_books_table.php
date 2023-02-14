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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('desc')->nullable();
            $table->text('summary')->nullable();
            $table->string('cover')->nullable();
            $table->string('cover_alt')->nullable();
            $table->string('cover_other')->nullable();

            $table->string('document');

            $table->float('price', 10, 2)->default(0.0);
            $table->string('currency', 10)->default('UGX');


            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('genre_id')->constrained()->cascadeOnDelete();

            $table->foreignId('author_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('admin_id')->nullable()->constrained('users')->cascadeOnDelete(); // approver

            $table->enum('status', ['published', 'draft', 'hidden'])->default('draft');
            $table->enum('admin_status', ['approved', 'review', 'pending', 'rejected'])->default('pending');

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
        Schema::dropIfExists('books');
    }
};
