<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiVaiLoaiSoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_vai_loai_soi', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('loai_vai_id')->unsigned();
            $table->foreign('loai_vai_id')->references('id')->on('loai_vai');
            $table->integer('loai_soi_id')->unsigned();
            $table->foreign('loai_soi_id')->references('id')->on('loai_soi');
            $table->double('dinh_muc')->unsigned()->nullable();


            $table->text('ghi_chu')->nullable();
            $table->timestamps();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('nhan_vien');
            $table->foreign('updated_by')->references('id')->on('nhan_vien');
            $table->foreign('deleted_by')->references('id')->on('nhan_vien');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai_vai_loai_soi');
    }
}
