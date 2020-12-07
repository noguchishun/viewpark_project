<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SignageData extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up(){
         if (!Schema::hasTable('signage_data')){
             Schema::create('signage_data',function(Blueprint $table){
             $table->smallInteger('parking_seq');//駐車場seq
             $table->tinyInteger('area_no');//エリアNo
             $table->smallInteger('x1');//座標データ
             $table->smallInteger('y1');//座標データ
             $table->smallInteger('x2');//座標データ
             $table->smallInteger('y2');//座標データ
             $table->smallInteger('x3');//座標データ
             $table->smallInteger('y3');//座標データ
             $table->smallInteger('x4');//座標データ
             $table->smallInteger('y4');//座標データ
             $table->primary(['parking_seq','area_no']);
             });
         }
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('management_data');
    }
}
