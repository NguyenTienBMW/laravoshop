<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnCodeActiveUsers extends Migration
{
     public function up()
    {
           Schema::table('users', function (Blueprint $table) {
          $table->string('code_active')->nullable()->index();
          $table->timestamp('time_active')->nullable();
          

           });

    }

    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['code_active','time_active']);
        

    });
    }
}
