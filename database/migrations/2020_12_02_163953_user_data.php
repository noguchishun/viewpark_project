<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserData extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('user_data')){
            Schema::create('user_data',function(Blueprint $table){
            $table->smallIncrements('user_seq');
            $table->string('user_name',50);
            $table->string('id',30);//ログイン用
            $table->string('password',30); //ログイン用
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('user_data');
    }
}
