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
        Schema::table('question_packages',function(Blueprint $table){
            $table->foreignId('round_id')->constrained('rounds');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('question_packages',function(Blueprint $table){
            $table->dropForeign(['round_id']);
            $table->dropColumn(['round_id']);
        });
    }
};
