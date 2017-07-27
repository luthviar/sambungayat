<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_log', function (Blueprint $table) {
            $table->increments('id_user_log');
        	
			
			$table-> unsignedInteger ('id_user');
			$table-> unsignedInteger ('id_pertanyaan');
			
			
			 $table->foreign('id_pertanyaan')
            ->references('id_pertanyaan')->on('pertanyaan')
            ->onDelete('cascade');
         
		 
		 			
			 $table->foreign('id_user')
            ->references('id_user')->on('user')
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
        Schema::dropIfExists('user_log');
    }
}
