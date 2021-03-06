<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSezonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sezonas', function (Blueprint $table) {
            $table->id();
            $table->integer('sezono_nr');
            $table->float('sezono_ivertinimas');
            $table->integer('epizodu_sk');
            $table->bigInteger('fk_tv_laida')->unsigned();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sezonas');
    }
}
