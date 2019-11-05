<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pegawai')) {
            Schema::create('pegawai', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nama', 50);
                $table->string('jabatan', 20);
                $table->integer('umur');
                $table->text('alamat');
                $table->timestamps();
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
        Schema::dropIfExists('pegawai');
    }
}
