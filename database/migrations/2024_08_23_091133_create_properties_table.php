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
            $table->string('title'); // Title of the property
            $table->text('description'); // Description of the property
            $table->decimal('price', 15, 2); // Price of the property
            $table->enum('type', ['house', 'apartment', 'land']); // Type of property
            $table->string('address'); // Address of the property
            $table->string('city'); // City where the property is located
            $table->string('state'); // State where the property is located
            $table->string('country'); // Country where the property is located
            $table->integer('area'); // Size of the property in square meters
            $table->integer('bedrooms')->nullable(); // Number of bedrooms
            $table->integer('bathrooms')->nullable(); // Number of bathrooms
            $table->integer('garages')->nullable(); // Number of garages
            $table->enum('status', ['available', 'sold', 'rented']); // Status of the property
            //$table->foreignId('agent_id')->constrained('users'); // Foreign key to users table (agent)
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
