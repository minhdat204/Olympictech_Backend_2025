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
        Schema::table('question_package_details',function(Blueprint $table){
            $table->foreignId('package_id')->constrained('question_packages');
            $table->foreignId('question_id')->constrained('questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('question_package_details',function(Blueprint $table){
            $table->dropForeign(['package_id']);
            $table->dropForeign(['question_id']);
            $table->dropColumn(['package_id','question_id']);
        });
    }
};
