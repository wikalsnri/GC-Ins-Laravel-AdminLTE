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
        Schema::table('perans', function (Blueprint $table) {
            //
            $table->foreignId('film_id')->constrained('films');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perans', function (Blueprint $table) {
            //
            $table->dropForeign(['film_id']);
            $table->dropColumn('film_id');
        });
    }
};
