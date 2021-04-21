<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
   {

     public function up()
   {
      Schema::create('items', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('surname');
      $table->string('email');
      $table->timestamps();
  });
}
      public function down()
   {
     Schema::drop('items');
  }
}
?>