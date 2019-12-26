<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
			 $table->bigIncrements('id'); 
             $table->char('nip_dosen', 15) ->unique(); 
             $table->string('nama', 150); 
             $table->date('tgl_lahir'); 
             $table->char('jenis_kelamin', 1); 
             $table->char('no_hp',12);
             $table->string('alamat', 100);
			 
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
        Schema::dropIfExists('dosens');
    }
}
