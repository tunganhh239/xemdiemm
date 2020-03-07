<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('this', function (Blueprint $table) {

            $table->string('mmh');
            $table->string('msv');

            $table->string('diem_cc');
            $table->string('diem_tbkt');
            $table->string('diem_btl');
            $table->string('diem_thi');
            $table->string('diem_tk');
            $table->string('xeploai');
            $table->string('note');

            $table->primary(['mmh','msv']);
            $table->unique(['mmh','msv']);
            $table->foreign('mmh')->references('mmh')->on('monhocs');
            $table->foreign('msv')->references('msv')->on('sinhviens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('this');
    }
}
