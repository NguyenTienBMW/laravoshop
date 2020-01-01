<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tr_user_id')->index()->default(0);
            $table->integer('tr_total')->default(0);
            $table->string('tr_note')->nullable();
            $table->string('tr_address')->nullable();
            $table->string('tr_phone')->nullable();
            $table->tinyInteger('tr_status')->default(0)->index();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
