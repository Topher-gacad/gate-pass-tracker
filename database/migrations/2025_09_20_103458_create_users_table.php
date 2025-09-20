<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
            Schema::create('users', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('email');
                $table->string('password');
                $table->string('company');
                $table->string('department');
                $table->string('full_name');
                $table->string('job_role');
                $table->string('role');
                $table->timestamps();
                $table->softDeletes();
            });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
