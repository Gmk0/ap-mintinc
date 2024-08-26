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
        Schema::create('construction_projects', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Title of the construction project
            $table->text('description')->nullable(); // Description of the project (nullable)
            $table->date('start_date')->nullable(); // Start date of the project (nullable)
            $table->date('end_date')->nullable(); // End date of the project (nullable)
            $table->longText('localisation')->nullable(); // Detailed localization information (nullable)
            $table->enum('status', ['pending', 'in progress', 'completed'])->default('pending'); // Status of the project
           // $table->foreignId('client_id')->constrained('users'); // Foreign key to users table (client)
            $table->foreignId('property_id')->constrained()->nullable(); // Foreign key to properties table (property)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('construction_projects');
    }
};
