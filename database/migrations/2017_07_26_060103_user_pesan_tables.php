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
			$table->increments('id_user_pesan');
        	
			
			$table-> unsignedInteger ('id_user');
			$table-> unsignedInteger ('id_saran');
	
		 
		 			
			 $table->foreign('id_user')
            ->references('id_user')->on('user')
            ->onDelete('cascade');
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
