<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_s_s', function (Blueprint $table) {
            $table->id();
            $table->string('filled_form')->nullable();
            $table->string('age')->nullable();
            $table->string('college_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('degree')->nullable();
            $table->string('stream')->nullable();
            $table->string('syllabus')->nullable();
            $table->string('prepare')->nullable();
            $table->string('communicate')->nullable();
            $table->string('approach')->nullable();
            $table->string('internal')->nullable();
            $table->string('performance')->nullable();
            $table->string('internship')->nullable();
            $table->string('mentoring')->nullable();
            $table->string('opportunity')->nullable();
            $table->string('outcomes')->nullable();
            $table->string('followup')->nullable();
            $table->string('illustrate')->nullable();
            $table->string('identity')->nullable();
            $table->string('able')->nullable();
            $table->string('effort')->nullable();
            $table->string('method')->nullable();
            $table->string('encourage')->nullable();
            $table->string('inculcate')->nullable();
            $table->string('ict_percentage')->nullable();
            $table->string('quality')->nullable();
            $table->string('suggestion1')->nullable();
            $table->string('suggestion2')->nullable();
            $table->string('suggestion3')->nullable();
            $table->string('status')->default('1')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_s_s');
    }
};
