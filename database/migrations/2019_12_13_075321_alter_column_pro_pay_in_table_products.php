<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnProPayInTableProducts extends Migration
{
    
    public function up()
    {
           Schema::table('products', function (Blueprint $table) {
          $table->tinyInteger('pro_pay')->default(0);
          $table->tinyInteger('pro_number')->default(0);

           });

    }

    
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('pro_pay');
        $table->dropColumn('pro_number');

    });
    }
}
