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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('title');
            $table->date('start_date');
            $table->date('deadline');
            $table->text('description');
            $table->string('tag')->nullable();
            $table->string('category');
            $table->string('assigned');
            $table->string('status');
            $table->integer('billing');
            $table->string('billing_type')->nullable();
            $table->string('estimated__hours')->nullable();
            $table->integer('estimated_costs')->nullable();
            $table->string('quality_level')->nullable();
            $table->string('total_images')->nullable();
            $table->string('total_pages')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
