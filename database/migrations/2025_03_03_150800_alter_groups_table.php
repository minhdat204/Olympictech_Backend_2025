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
        Schema::table('groups',function(Blueprint $table){
            $table->foreignId('match_id')->constrained('matches');
            $table->foreignId('judge_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('groups',function(Blueprint $table){
            $table->dropForeign(['match_id']);
            $table->dropForeign(['judge_id']);
            $table->dropColumn(['match_id','judge_id']);
        });
    }
};