<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use  App\bds;
class CreateNhadautuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhadautu', function (Blueprint $table) {
            $table->bigIncrements('NDT_ID');
            $table->unsignedInteger('BDS_ID');
            $table->string('NDT_Ten');
            $table->string('NDT_DiaChi');
            $table->integer('NDT_SDT');
            $table->string('NDT_Email');
            $table->timestamps();
            $table->foreign('BDS_ID')->references('NDT_ID')->on('nhadautu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhadautu');
    }
}
