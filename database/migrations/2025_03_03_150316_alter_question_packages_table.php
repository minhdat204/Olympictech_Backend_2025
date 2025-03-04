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
            $table->unsignedBigInteger('match_id')->unique();
            $table->foreign('match_id')->references('id')->on('matches');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('question_packages',function(Blueprint $table){
            $table->dropForeign(['match_id']);
            $table->dropColumn(['match_id']);
        });
    }
};
