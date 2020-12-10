<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuctions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start', 0);
            $table->dateTime('end', 0);
            $table->boolean('aviable');
            $table->enum('type',['Mañana','Tarde','Noche']);
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
        Schema::dropIfExists('fuctions');
    }
}
