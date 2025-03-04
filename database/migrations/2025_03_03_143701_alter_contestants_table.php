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
        Schema::table('contestants',function(Blueprint $table){
            $table->foreignId('current_round_id')->constrained('rounds');
            $table->foreignId('group_id')->constrained('groups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contestants',function(Blueprint $table){
            $table->dropForeign(['current_round_id']);
            $table->dropForeign(['group_id']);
            $table->dropColumn(['current_round_id','group_id']);
        });
    }
};