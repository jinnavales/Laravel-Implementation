<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeDataTable extends Migration
{
    public function up()
    {
        Schema::create('resume_data', function (Blueprint $table) {
            $table->id('resume_id'); // Set resume_id as the primary key
            $table->string('email');
            $table->string('phone');
            $table->text('summary');
            $table->text('experience');
            $table->text('education');
            $table->text('skills');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resume_data');
    }
}
