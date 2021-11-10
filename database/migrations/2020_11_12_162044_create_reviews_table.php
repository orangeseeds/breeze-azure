<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('writer_name');
            $table->string('writer_email');
            $table->year('joined_at');
            $table->foreignId('consultancy_id')->constrained()->onDelete('cascade');
            $table->string('description', 1000);
            $table->foreignId('course_id')->constrained()->nullable();
            $table->decimal('rating',3,2); //out of 5
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
        Schema::dropIfExists('reviews');
    }
}
