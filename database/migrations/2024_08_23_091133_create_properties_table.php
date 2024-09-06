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
            $table->json('title'); // Title of the property
            $table->json('description')->nullable();
            $table->json('slug'); // Description of the property
            $table->decimal('price', 15, 2); // Price of the property
          // Type of property
            $table->string('address')->nullable(); // Address of the
            $table->string('lien_video')->nullable();
            $table->json('features')->nullable();
          //  $table->string('city')->nullable(); // City where the property is located
            $table->string('state')->nullable(); // State where the property is located
            $table->string('country')->nullable(); // Country where the property is located
            $table->string('area')->nullable(); // Size of the property in square meters
            $table->json('rooms')->nullable(); // Number of bedrooms

            $table->foreignId('category_id')->constrained();
            $table->enum('status', ['available', 'sold', 'rented'])->default('available');
            $table->boolean('afficher')->default(true);
            // Status of the property
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
