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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug',255);            
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->string('email')->unique();
            $table->string('phone_number',20);
            $table->string('gender',15);
            $table->string('country',100);
            $table->string('time_zone');
            $table->string('user_type')->nullable();
            $table->string('device_info_hash')->nullable();
            $table->biginteger('application_id')->unsigned()->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->timestamp('last_seen')->nullable();
            $table->string('social_unique_id')->nullable();
            $table->enum('mobile_application_type', array('ANDROID','IOS'))->default('ANDROID');
            $table->text('token')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
