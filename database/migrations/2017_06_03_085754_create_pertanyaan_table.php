<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		 Schema::create('pertanyaan', function (Blueprint $table) {
            $table->increments('id_pertanyaan');
            $table->string('isi');
			$table->string('jawaban_benar');
			$table->string('nama_surah');
			
			
			$table-> unsignedInteger ('id_permainan');
			
			
			 $table->foreign('id_permainan')
            ->references('id_permainan')->on('permainan')
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
			Schema::dropIfExists('pertanyaan');
    }
}
