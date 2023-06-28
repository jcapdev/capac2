<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Noticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('noticiashome', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagen');
            $table->string('title');
            $table->string('autor');
            $table->string('date');
            $table->string('time');
            $table->string('place');
            $table->string('descripcion');            
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
