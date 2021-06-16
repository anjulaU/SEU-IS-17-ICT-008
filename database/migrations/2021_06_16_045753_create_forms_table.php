<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{


    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {

            $table->id();

            $table->string('name');
            $table->string('useranme');
            $table->date('date_of_birth');
            $table->string('email');
            $table->integer('teliphone-no');
            $table->string('nic-no');
            $table->string('gender');
            $table->string('password');
            $table->string('reenter_password');
        });
    }


    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
