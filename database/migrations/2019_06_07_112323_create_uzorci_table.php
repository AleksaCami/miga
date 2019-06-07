<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUzorciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzorci', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->integer('vreme_prikupljanja');
            $table->integer('sirina');
            $table->integer('visina');
            $table->integer('status'); // 0 = na Marsu, 1 = u transportu, 2 = na Zemlji
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
        Schema::dropIfExists('uzorci');
    }
}
