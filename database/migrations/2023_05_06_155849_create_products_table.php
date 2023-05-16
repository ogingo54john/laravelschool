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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("slug")->unique();
            $table->float("price")->default("0");
            $table->string("quantity")->default("0");
            $table->float("older_price")->nullable();
            $table->longText("features")->nullable();
            $table->longText("faq")->nullable();
            $table->longText("description");
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
        Schema::dropIfExists('products');
    }
};
