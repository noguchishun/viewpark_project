<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorrespondedData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('corresponded_data')){
            Schema::create('corresponded_data',function(Blueprint $table){
            $table->smallInteger('user_seq');
            $table->smallInteger('parking_seq');//駐車場seq
            $table->primary(['user_seq','parking_seq']);
            });
        }
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('corresponded_data');
    }
}
