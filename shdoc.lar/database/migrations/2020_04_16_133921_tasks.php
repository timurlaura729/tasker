<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tasks extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
			$table->longText('description');
            $table->integer('id_role')->default(1);
            $table->integer('closed')->default(0);
            $table->timestamp('date_create');
            $table->timestamp('date_end');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
