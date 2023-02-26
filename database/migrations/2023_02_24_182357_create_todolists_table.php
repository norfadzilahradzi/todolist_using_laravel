<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodolistsTable extends Migration
{

    public function up()
    {
        //DATABASE MIGRATION
        Schema::create('todolists', function (Blueprint $table) { 
            $table->id();
            $table->string('content');
            $table->integer('is_complete')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('todolists');
    }
};
