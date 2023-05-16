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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userId")->unique();
            $table->foreign("userId")->references("id")->on("users")->onDelete("cascade");
            $table->string("phone")->nullable();
            $table->longText("bio")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("github")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedln")->nullable();
            $table->string("image")->nullable();
            $table->string("zipcode")->nullable();
            $table->string("address")->nullable();
            $table->string("dob")->nullable();
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
        Schema::dropIfExists('profile');
    }
};
