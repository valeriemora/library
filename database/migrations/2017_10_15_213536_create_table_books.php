<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBooks extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('books', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name',128);
      $table->string('author',128);
      $table->tinyInteger('category_id');
      $table->date('published');
      $table->string('user',128);
      $table->tinyInteger('status')->default(1);//1 not borrowed
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
    Schema::dropIfExists('books');
  }
}
