<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParkingData extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('parking_data')){
            Schema::create('parking_data',function(Blueprint $table){
                $table->smallIncrements('parking_seq');//駐車場seq
                $table->string('parking_name',50);//駐車場名
                $table->smallInteger('space_small');//駐車マス数(小型車)
                $table->smallInteger('space_large');//駐車マス数(大型車)
                $table->string('image_file',255);//航空写真画像ファイルパス
                $table->tinyInteger('cam_cnt');//カメラ数
                $table->string('ip_adress_01',255);//カメラ1 アドレス
                $table->string('ip_adress_02',255);//カメラ2 アドレス
                $table->string('ip_adress_03',255);//カメラ3 アドレス
                $table->string('ip_adress_04',255);//カメラ4 アドレス
                $table->string('ip_adress_05',255);//カメラ5 アドレス
                $table->string('ip_adress_06',255);//カメラ6 アドレス
                $table->string('ip_adress_07',255);//カメラ7 アドレス
                $table->string('ip_adress_08',255);//カメラ8 アドレス
                $table->string('ip_adress_09',255);//カメラ9 アドレス
                $table->string('ip_adress_10',255);//カメラ10 アドレス
                $table->string('ip_adress_11',255);//カメラ11 アドレス
                $table->string('ip_adress_12',255);//カメラ12 アドレス
                $table->string('ip_adress_13',255);//カメラ13 アドレス
                $table->string('ip_adress_14',255);//カメラ14 アドレス
                $table->string('ip_adress_15',255);//カメラ15 アドレス
                $table->string('ip_adress_16',255);//カメラ16 アドレス
                $table->string('ip_adress_17',255);//カメラ17 アドレス
                $table->string('ip_adress_18',255);//カメラ18 アドレス
                $table->string('ip_adress_19',255);//カメラ19 アドレス
                $table->string('ip_adress_20',255);//カメラ20 アドレス
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_data');
    }
}
