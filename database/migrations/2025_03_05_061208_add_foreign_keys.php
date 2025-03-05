<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // answers
        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('contestant_id')->references('id')->on('contestants')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });

        // contestants
        Schema::table('contestants', function (Blueprint $table) {
            $table->foreign('current_round_id')->references('id')->on('rounds')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });

        // groups
        Schema::table('groups', function (Blueprint $table) {
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade');
            $table->foreign('judge_id')->references('id')->on('users')->onDelete('cascade');
        });

        // matches
        Schema::table('matches', function (Blueprint $table) {
            $table->foreign('package_id')->references('id')->on('question_packages')->onDelete('cascade');
            $table->foreign('round_id')->references('id')->on('rounds')->onDelete('cascade');
            $table->foreign('current_question_id')->references('id')->on('question_package_details')->onDelete('cascade');
        });

        // question_package_details
        Schema::table('question_package_details', function (Blueprint $table) {
            $table->foreign('package_id')->references('id')->on('question_packages')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });

        // score_logs
        Schema::table('score_logs', function (Blueprint $table) {
            $table->foreign('contestant_id')->references('id')->on('contestants')->onDelete('cascade');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade');
        });

        // video_submissions
        Schema::table('video_submissions', function (Blueprint $table) {
            $table->foreign('round_id')->references('id')->on('rounds')->onDelete('cascade');
        });
    }

    public function down()
    {

        // video_submissions
        Schema::table('video_submissions', function (Blueprint $table) {
            $table->dropForeign(['round_id']);
        });

        // score_logs
        Schema::table('score_logs', function (Blueprint $table) {
            $table->dropForeign(['contestant_id']);
            $table->dropForeign(['match_id']);
        });

        // question_package_details
        Schema::table('question_package_details', function (Blueprint $table) {
            $table->dropForeign(['package_id']);
            $table->dropForeign(['question_id']);
        });

        // matches
        Schema::table('matches', function (Blueprint $table) {
            $table->dropForeign(['package_id']);
            $table->dropForeign(['round_id']);
            $table->dropForeign(['current_question_id']);
        });

        // groups
        Schema::table('groups', function (Blueprint $table) {
            $table->dropForeign(['match_id']);
            $table->dropForeign(['judge_id']);
        });

        // contestants
        Schema::table('contestants', function (Blueprint $table) {
            $table->dropForeign(['current_round_id']);
            $table->dropForeign(['group_id']);
        });

        // answers
        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign(['contestant_id']);
            $table->dropForeign(['question_id']);
        });
    }
};
