<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('create_by');
            $table->string('first_name', 30);
            $table->string('surname', 30);
            $table->string('email');
            $table->string('password');
            $table->string('position');
            $table->integer('phone');
            $table->integer('salary');
            $table->integer('job_experience')->nullable()->default('0');
            $table->string('education')->nullable()->default('');
            $table->string('result')->nullable()->default('');
            $table->string('jub_summary')->nullable();
            $table->string('home_address', 255);
            $table->string('profile_image', 255)->nullable();
            $table->string('nid_birth_certificate', 255);
            $table->softDeletes();
            $table->foreign('create_by')->on('users')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('employs');
    }
}
