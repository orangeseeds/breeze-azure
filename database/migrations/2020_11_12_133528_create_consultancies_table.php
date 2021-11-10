<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contrained()->nullable();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->string('slug')->unique();
            $table->string('profile_picture')->nullable();
            $table->string('cover_picture')->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();
            $table->decimal('rating',3,2)->nullable(); //out of 5
            $table->string('description', 1000)->nullable();
            $table->bigInteger('page_views')->default(0);
            $table->boolean('sponsored')->default(0);
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
        Schema::dropIfExists('consultancies');
    }
}
