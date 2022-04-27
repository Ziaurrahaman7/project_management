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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('image')->nullable();
            $table->string('email');
            $table->text('details');
            $table->string('tag')->nullable();
            $table->string('billing_streat')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_zipcode');
            $table->string('billing_country');
            $table->string('billing_telephone');
            $table->text('billing_website')->nullable();
            $table->string('billing_city');
            $table->string('tax_number')->nullable();
            $table->string('shipping_streat')->nullable();
            $table->string('shipping_state')->nullable();
            $table->string('shipping_zipcode');
            $table->string('shipping_country');
            $table->string('shipping_telephone');
            $table->string('shipping_website')->nullable();
            $table->string('shipping_city');
            $table->string('lastproject')->nullable();
            $table->text('comment')->nullable();
            $table->string('project_type');
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
        Schema::dropIfExists('clients');
    }
};
