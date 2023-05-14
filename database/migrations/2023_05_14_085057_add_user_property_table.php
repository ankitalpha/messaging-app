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
        Schema::create('user_property', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->string('property_name');

            $table->string('dimensions');
            $table->enum('list_type', ['RENT', 'SELL']);
            $table->float('rate_per_square_feet');

            $table->string('bhk');
            $table->enum("status",["SOLD", "UNSOLD"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_property');
    }
};
