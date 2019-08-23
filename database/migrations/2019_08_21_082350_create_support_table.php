<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

<<<<<<< HEAD:database/migrations/2019_08_21_070339_create_intro_table.php
class CreateIntroTable extends Migration
=======
class CreateSupportTable extends Migration
>>>>>>> 932cd44f930a79d79b5ac1ae36b887719f7174e9:database/migrations/2019_08_21_082350_create_support_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2019_08_21_070339_create_intro_table.php
        Schema::create('intro', function (Blueprint $table) {
=======
        Schema::create('support', function (Blueprint $table) {
>>>>>>> 932cd44f930a79d79b5ac1ae36b887719f7174e9:database/migrations/2019_08_21_082350_create_support_table.php
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('content');
            $table->string('slug');
<<<<<<< HEAD:database/migrations/2019_08_21_070339_create_intro_table.php
=======
            $table->tinyInteger('status')->default(1);
>>>>>>> 932cd44f930a79d79b5ac1ae36b887719f7174e9:database/migrations/2019_08_21_082350_create_support_table.php
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
<<<<<<< HEAD:database/migrations/2019_08_21_070339_create_intro_table.php
        Schema::dropIfExists('intro');
=======
        Schema::dropIfExists('support');
>>>>>>> 932cd44f930a79d79b5ac1ae36b887719f7174e9:database/migrations/2019_08_21_082350_create_support_table.php
    }
}
