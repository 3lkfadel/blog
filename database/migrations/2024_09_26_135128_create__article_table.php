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
        Schema::create('_article', function (Blueprint $table) {
            $table->id();
            $table -> string("Titre");
            $table -> string("contenue");
            $table -> string("conetue_multimedia");
            $table -> string("categorie");
            $table -> string("type_d'article");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_article');
    }
};
