<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_cases', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('categoryType');
            $table->string('tagName');
            $table->string('hoverName');
            $table->string('category');
            $table->string('image');
            $table->string('companyName')->nullable();
            $table->string('projectDuration')->nullable();
            $table->string('projectType')->nullable();
            $table->mediumText('projectDes1')->nullable();
            $table->mediumText('projectDes2')->nullable();
            $table->mediumText('projectDes3')->nullable();
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
        Schema::dropIfExists('show_cases');
    }
}
