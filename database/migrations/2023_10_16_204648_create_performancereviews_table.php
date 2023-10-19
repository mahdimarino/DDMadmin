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
        Schema::create('performancereviews', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('review_period')->nullable();
            $table->string('reviewer')->nullable();
            $table->string('job_title')->nullable();
            $table->string('date_of_review')->nullable();
            $table->string('group_name')->nullable();
            $table->text('goal1')->nullable();
            $table->text('goal2')->nullable();
            $table->text('goal3')->nullable();
            $table->text('goal4')->nullable();
            $table->text('goal5')->nullable();
            $table->text('achievedornot1')->nullable();
            $table->text('achievedornot2')->nullable();
            $table->text('achievedornot3')->nullable();
            $table->text('achievedornot4')->nullable();
            $table->text('achievedornot5')->nullable();
            $table->text('goal1comment')->nullable();
            $table->text('goal2comment')->nullable();
            $table->text('goal3comment')->nullable();
            $table->text('goal4comment')->nullable();
            $table->text('goal5comment')->nullable();
            $table->string('answer1_personalrate')->nullable();
            $table->string('answer2_personalrate')->nullable();
            $table->string('answer3_personalrate')->nullable();
            $table->string('answer4_personalrate')->nullable();
            $table->string('answer5_personalrate')->nullable();
            $table->string('answer6_personalrate')->nullable();
            $table->string('answer7_personalrate')->nullable();
            $table->string('answer8_personalrate')->nullable();
            $table->string('answer9_personalrate')->nullable();
            $table->string('answer10_personalrate')->nullable();
            $table->string('answer1_seniormanagerrate')->nullable();
            $table->string('answer2_seniormanagerrate')->nullable();
            $table->string('answer3_seniormanagerrate')->nullable();
            $table->string('answer4_seniormanagerrate')->nullable();
            $table->string('answer5_seniormanagerrate')->nullable();
            $table->string('answer6_seniormanagerrate')->nullable();
            $table->string('answer7_seniormanagerrate')->nullable();
            $table->string('answer8_seniormanagerrate')->nullable();
            $table->string('answer9_seniormanagerrate')->nullable();
            $table->string('answer10_seniormanagerrate')->nullable();
            $table->string('answer1_linemanagerrate')->nullable();
            $table->string('answer2_linemanagerrate')->nullable();
            $table->string('answer3_linemanagerrate')->nullable();
            $table->string('answer4_linemanagerrate')->nullable();
            $table->string('answer5_linemanagerrate')->nullable();
            $table->string('answer6_linemanagerrate')->nullable();
            $table->string('answer7_linemanagerrate')->nullable();
            $table->string('answer8_linemanagerrate')->nullable();
            $table->string('answer9_linemanagerrate')->nullable();
            $table->string('answer10_linemanagerrate')->nullable();
            $table->text('answer1_personalcomment')->nullable();
            $table->text('answer2_personalcomment')->nullable();
            $table->text('answer3_personalcomment')->nullable();
            $table->text('answer4_personalcomment')->nullable();
            $table->text('answer5_personalcomment')->nullable();
            $table->text('answer6_personalcomment')->nullable();
            $table->text('answer7_personalcomment')->nullable();
            $table->text('answer8_personalcomment')->nullable();
            $table->text('answer9_personalcomment')->nullable();
            $table->text('answer10_personalcomment')->nullable();
            $table->text('answer1_seniormanagercomment')->nullable();
            $table->text('answer2_seniormanagercomment')->nullable();
            $table->text('answer3_seniormanagercomment')->nullable();
            $table->text('answer4_seniormanagercomment')->nullable();
            $table->text('answer5_seniormanagercomment')->nullable();
            $table->text('answer6_seniormanagercomment')->nullable();
            $table->text('answer7_seniormanagercomment')->nullable();
            $table->text('answer8_seniormanagercomment')->nullable();
            $table->text('answer9_seniormanagercomment')->nullable();
            $table->text('answer10_seniormanagercomment')->nullable();
            $table->text('answer1_linemanagercomment')->nullable();
            $table->text('answer2_linemanagercomment')->nullable();
            $table->text('answer3_linemanagercomment')->nullable();
            $table->text('answer4_linemanagercomment')->nullable();
            $table->text('answer5_linemanagercomment')->nullable();
            $table->text('answer6_linemanagercomment')->nullable();
            $table->text('answer7_linemanagercomment')->nullable();
            $table->text('answer8_linemanagercomment')->nullable();
            $table->text('answer9_linemanagercomment')->nullable();
            $table->text('answer10_linemanagercomment')->nullable();
            $table->string('linemanager_rating1')->nullable();
            $table->string('linemanager_rating2')->nullable();
            $table->string('linemanager_rating3')->nullable();
            $table->string('linemanager_rating4')->nullable();
            $table->string('linemanager_rating5')->nullable();
            $table->string('seniormanager_evaluation1')->nullable();
            $table->string('seniormanager_evaluation2')->nullable();
            $table->string('seniormanager_evaluation3')->nullable();
            $table->string('seniormanager_evaluation4')->nullable();
            $table->string('seniormanager_evaluation5')->nullable();
            $table->text('general_assessment1')->nullable();
            $table->text('general_assessment2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performancereviews');
    }
};
