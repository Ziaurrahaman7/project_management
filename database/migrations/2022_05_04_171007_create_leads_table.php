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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email')->nullable();
            $table->integer('leadValue');
            $table->string('assigned');
            $table->string('status');
            $table->text('note')->nullable();
            $table->string('source')->nullable();
            $table->string('tag')->nullable();
            $table->date('lastContacted')->nullable();
            $table->integer('totalBudget')->nullable();
            $table->date('targetDate');
            $table->string('contentType')->nullable();
            $table->string('companyName')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('leads');
    }
};
