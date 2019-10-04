<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('description');
            $table->text('status')->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->unsignedInteger('owner_id')->default(1);
            $table->unsignedInteger('responsible_designer')->default(1);
            $table->unsignedInteger('client_id')->default(1);
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
        Schema::dropIfExists('tasks');
    }
}
