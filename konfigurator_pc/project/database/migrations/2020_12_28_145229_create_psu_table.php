<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->decimal('price', 8, 2);
            $table->integer('power');
            $table->string('producer');
            $table->timestamps();
            $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psu');
    }
}
