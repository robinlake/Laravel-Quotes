<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('quotes');
        Schema::create('quotes', function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->integer('date');
            $table->string('bc');
            $table->string('author');
            $table->string('text');
            $table->string('submitted_by');
            $table->rememberToken();
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
