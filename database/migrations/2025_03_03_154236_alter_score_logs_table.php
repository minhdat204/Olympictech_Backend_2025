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
        Schema::table('score_logs',function(Blueprint $table){
            $table->foreignId('contestant_id')->constrained('contestants');
            $table->foreignId('match_id')->constrained('matches');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('score_logs',function(Blueprint $table){
            $table->dropForeign(['contestant_id']);
            $table->dropForeign(['match_id']);
            $table->dropColumn(['contestant_id','match_id']);
        });
    }
};
