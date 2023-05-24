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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->string("phone")->unique();
            $table->string("staff_number")->unique();
            $table->longText("qualifications");
            $table->foreignId("branch_id")->constrained()->onDelete("cascade");
            // $table->foreignId("branch_id")->constrained()->onDelete("cascade");
            $table->longText("experience");
            $table->string("gender");
            $table->string("image");
            $table->date("date_joined");
            $table->date("dob")->nullable();
            $table->string("father_name")->nullable();
            $table->string("father_occupation")->nullable();
            $table->string("father_phone_number")->nullable();
            $table->string("mother_name")->nullable();
            $table->string("mother_occupation")->nullable();
            $table->string("mother_phone_number")->nullable();
            $table->string("county")->nullable();
            $table->string("division")->nullable();
            $table->string("district")->nullable();
            $table->string("location")->nullable();
            $table->string("sub_location")->nullable();
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
        Schema::dropIfExists('staff');
    }
};
