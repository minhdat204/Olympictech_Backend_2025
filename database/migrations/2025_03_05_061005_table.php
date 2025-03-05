<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // 1. users - Không có phụ thuộc
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 255);
            $table->string('email', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('role', 20)->default('judge');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });

        // 2. rounds - Không có phụ thuộc
        Schema::create('rounds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('round_name', 100);
            $table->text('description')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->timestamps();
        });

        // 3. question_packages - Không có phụ thuộc
        Schema::create('question_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name', 100);
            $table->timestamps();
        });

        // 4. questions - Không có phụ thuộc trực tiếp
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('question_text');
            $table->text('question_intro');
            $table->text('question_topic');
            $table->text('question_explanation');
            $table->string('question_type', 255);
            $table->string('media_url', 255)->nullable();
            $table->text('correct_answer');
            $table->json('options');
            $table->string('difficulty', 20);
            $table->timestamps();
        });

        // 5. question_package_details - Phụ thuộc vào question_packages và questions
        Schema::create('question_package_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('question_order');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('question_id');
            $table->timestamps();
        });

        // 6. matches - Phụ thuộc vào rounds và question_packages
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('match_name', 255);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('status', 20);
            $table->unsignedBigInteger('current_question_id')->nullable();
            $table->unsignedBigInteger('gold_winner_id')->nullable();
            $table->string('current_question_status', 20);
            $table->unsignedBigInteger('completed_questions');
            $table->unsignedBigInteger('round_id');
            $table->unsignedBigInteger('package_id');
            $table->timestamps();
        });

        // 7. groups - Phụ thuộc vào matches và users
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('group_name', 100);
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('judge_id');
            $table->timestamps();
        });

        // 8. contestants - Phụ thuộc vào rounds và groups
        Schema::create('contestants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname', 255);
            $table->string('email', 255);
            $table->string('shool', 255); // Lưu ý: "shool" thay vì "school" theo tài liệu
            $table->integer('class_year');
            $table->string('registration_number', 100);
            $table->decimal('score', 10, 2)->default(0.00);
            $table->string('status', 20);
            $table->unsignedBigInteger('current_round_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();
        });

        // 9. answers - Phụ thuộc vào contestants và questions
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('is_correct');
            $table->unsignedBigInteger('contestant_id');
            $table->unsignedBigInteger('question_id');
            $table->timestamps();
        });

        // 10. score_logs - Phụ thuộc vào contestants và matches
        Schema::create('score_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('score', 10, 2);
            $table->dateTime('updated_at');
            $table->unsignedBigInteger('contestant_id');
            $table->unsignedBigInteger('match_id');
        });

        // 11. video_submissions - Phụ thuộc vào rounds
        Schema::create('video_submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('team_name', 255);
            $table->string('video_url', 255);
            $table->dateTime('submitted_at');
            $table->unsignedBigInteger('round_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('video_submissions');
        Schema::dropIfExists('score_logs');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('contestants');
        Schema::dropIfExists('groups');
        Schema::dropIfExists('matches');
        Schema::dropIfExists('question_package_details');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('question_packages');
        Schema::dropIfExists('rounds');
        Schema::dropIfExists('users');
    }
};
