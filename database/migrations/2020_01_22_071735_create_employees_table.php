<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', static function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['respondent', 'manager', 'director']);
            $table->unsignedBigInteger('call_id')->nullable();
            $table->unsignedTinyInteger('priority');
            $table->timestamps();

            $table->foreign('call_id')->references('id')->on('calls')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
