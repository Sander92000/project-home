<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('postcode');
            $table->string('city')->nullable();
            $table->integer('plot_size')->nullable();
            $table->integer('property_size')->nullable();
            $table->integer('num_floors')->nullable();
            $table->integer('num_rooms')->nullable();
            $table->boolean('has_garden')->nullable();
            $table->boolean('has_garage')->nullable();
            $table->bigInteger('price');
            $table->string('ad_link')->nullable();
            $table->integer('created_by');
            $table->string('transaction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
