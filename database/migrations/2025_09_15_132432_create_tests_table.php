<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->json('content'); // Stocke la question + réponse en JSON
            $table->integer('max_score')->default(100);
            $table->timestamps();
        });
    }
    /*
Exemple JSON stocké dans la colonne "content" :

{
  "question": "Quelle est la capitale de la Russie ?",
  "answer": "Moscou"
}

Autre exemple avec plusieurs choix :

{
  "question": "Quelle est la capitale de la Russie ?",
  "options": ["Moscou", "Saint-Pétersbourg", "Kazan"],
  "answer": "Moscou"
}

Exemple avec plusieurs questions (quiz) :

[
  {
    "question": "Quelle est la capitale de la Russie ?",
    "answer": "Moscou"
  },
  {
    "question": "En quelle année a eu lieu la Révolution d'Octobre ?",
    "answer": "1917"
  }
]
*/

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
