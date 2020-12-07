<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ManagementData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up(){
         if (!Schema::hasTable('management_data')){
             Schema::create('management_data',function(Blueprint $table){
             $table->smallInteger('parking_seq');//駐車場seq
             $table->smallInteger('camera_seq');//カメラseq
             $table->dateTime('dt');//時刻(1秒単位)
             $table->smallInteger('q_small');//駐車台数(小型車)
             $table->smallInteger('q_large');//駐車台数(大型車)
             $table->tinyInteger('s_small');//飽和度(小型車)
             $table->tinyInteger('s_large');//飽和度(大型車)
             $table->smallInteger('t_small');//平均滞在時間(小型車)
             $table->smallInteger('t_large');//平均滞在時間(大型車)
             $table->smallInteger('in_small');//マス内駐車(小型車)
             $table->smallInteger('in_large');//マス内駐車(大型車)
             $table->smallInteger('out_small');//マス外駐車(小型車)
             $table->smallInteger('out_large');//マス外駐車(大型車)
             $table->char('area',30);//シート「エリア」参照
             $table->primary(['parking_seq','camera_seq','dt']);
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
