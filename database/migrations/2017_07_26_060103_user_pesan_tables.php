<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPesanTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	   Schema::create('feedback', function (Blueprint $table) {

			$table->increments('id');
			$table->unsignedInteger ('id_user');
			$table->text('feedback');

		 			
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
        //
    }
}
