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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            $table->longText("title");
            $table->string("slug")->unique();
            $table ->longText("body")->nullable();
            $table->string("image")->nullable();
            $table->string("meta_title")->nullable();
            $table->string("meta_keyword")->nullable();
            $table->mediumText("meta_description")->nullable();
            $table->tinyInteger("status")->default("0")->comment("0=visible, 1=hidden");
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
        Schema::dropIfExists('posts');
    }
};
