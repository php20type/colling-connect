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
        Schema::create('mover_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mover_id')->nullable();
            $table->foreign('mover_id')->references('id')->on('movers')->constrained();
            $table->text('unit_no')->nullable();
            $table->text('street_no')->nullable();
            $table->text('street_name')->nullable();
            $table->text('street_type')->nullable();
            $table->text('suburb')->nullable();
            $table->text('postcode')->nullable();
            $table->text('state')->nullable();
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
        Schema::dropIfExists('mover_addresses');
    }
};
