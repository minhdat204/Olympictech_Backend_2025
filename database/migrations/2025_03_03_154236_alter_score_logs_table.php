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
            $table->foreignId('round_id')->constrained('rounds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('score_logs',function(Blueprint $table){
            $table->dropForeign(['contestant_id']);
            $table->dropForeign(['round_id']);
            $table->dropColumn(['contestant_id','round_id']);
        });
    }
};