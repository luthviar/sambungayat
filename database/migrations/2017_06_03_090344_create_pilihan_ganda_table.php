<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePilihanGandaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //
		 Schema::create('pilihan_ganda', function (Blueprint $table) {
            $table->increments('id_pilihan_ganda');
            $table->string('isi_pilihan');
			$table->string('pilihan');		
			$table-> unsignedInteger ('id_pertanyaan');
			
			
			 $table->foreign('id_pertanyaan')
            ->references('id_pertanyaan')->on('pertanyaan')
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
