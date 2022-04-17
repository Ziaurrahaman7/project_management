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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->text('image');
            $table->text('address');
            $table->string('phone');
            $table->string('gender');
            $table->string('jobTitle');
            $table->integer('sallary');
            $table->string('sallaryTerm')->nullable();
            $table->date('dateofHire');
            $table->string('email')->unique('teams');
            $table->string('password');
            $table->string('role')->nullable();
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
        Schema::dropIfExists('teams');
    }
};
