<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaskStatus extends Migration
{
    public function up()
    {
        Schema::create('task_statues', function (Blueprint $table) {
            $table->id();
            $table->integer("id_task");
            $table->integer("id_status");
        });
    }

    public function down()
    {
        Schema::dropIfExists('task_statues');
    }
}
