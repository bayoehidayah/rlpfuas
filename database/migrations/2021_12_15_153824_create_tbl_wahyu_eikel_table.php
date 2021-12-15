<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblWahyuEikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_wahyu_eikel', function (Blueprint $table) {
            $table->id();
            $table->integer("nip");
            $table->string("nama",50);
            $table->string("jabatan", 30);
            $table->string("gol", 20);
            $table->date("tanggal_gajian");
            $table->integer("gaji_pokok");
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
        Schema::dropIfExists('tbl_wahyu_eikel');
    }
}
