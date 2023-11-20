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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('designation_produit');
            $table->text('description_produit')->nullable();
            $table->float('prix_produit');
            $table->date('datedexpiration_produit')->nullable();
            $table->enum('disponibilite_produit', ['oui', 'non']);
            $table->string('image_produit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
