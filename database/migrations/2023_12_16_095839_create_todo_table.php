<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('jadwal_kegiatan');
            $table->text('keterangan_kegiatan')->nullable();
            $table->enum('durasi_kegiatan', ['5 menit', '10 menit', '15 menit', '30 menit', '45 menit', '1 jam', '1 jam 30 menit', '2 jam', '2 jam 30 menit', '3 jam',]);
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
        Schema::dropIfExists('todo');
    }
};
