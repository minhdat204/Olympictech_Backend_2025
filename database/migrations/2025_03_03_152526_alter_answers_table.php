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
        Schema::table('answers',function(Blueprint $table){
            $table->foreignId('contestant_id')->constrained('contestants');
            $table->foreignId('question_id')->constrained('questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('answers',function(Blueprint $table){
            $table->dropForeign(['contestant_id']);
            $table->dropForeign(['question_id']);
            $table->dropColumn(['contestant_id','question_id']);
        });
    }
};
