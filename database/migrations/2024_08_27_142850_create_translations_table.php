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
        Schema::create('translations2', function (Blueprint $table) {
            $table->id();
            $table->string('model_type'); // Le type de modèle, par exemple, "Post"
            $table->unsignedBigInteger('model_id'); // L'identifiant du modèle, par exemple, "Post" ID
            $table->string('field'); // Le champ que vous traduisez, par exemple, "title" ou "content"
            $table->string('locale'); // La langue, par exemple, "en" ou "fr"
            $table->text('translation'); // Le texte traduit
            $table->timestamps();

            $table->index(['model_type', 'model_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
