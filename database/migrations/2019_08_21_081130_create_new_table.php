<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('new', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('summary');
            $table->text('content');
            $table->string('image');
            $table->string('slug');
            $table->integer('status');
            $table->bigInteger('id_admin')->unsigned();
            $table->foreign('id_admin')
                  ->references('id')
                  ->on('admin');
            $table->timestamps();
        });

        Schema::create('banner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->integer('status');
            $table->bigInteger('cate_new')->unsigned();
            $table->foreign('cate_new')
                  ->references('id')
                  ->on('new')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('new');
    }
}
