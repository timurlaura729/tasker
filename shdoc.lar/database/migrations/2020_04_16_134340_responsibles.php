<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Responsibles extends Migration
{
    public function up()
    {
        Schema::create('responsibles', function (Blueprint $table) {
            $table->id();
            $table->integer("id_task");
            $table->integer("id_user");
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsibles');
    }
}
