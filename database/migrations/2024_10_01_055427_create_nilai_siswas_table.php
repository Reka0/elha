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
        Schema::create('nilai_siswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id'); // Foreign key ke tabel siswa
            $table->integer('bahasa_inggris');
            $table->integer('matematika');
            $table->integer('bahasa_indonesia');
            $table->integer('kejuruan');
            $table->integer('agama');
            $table->float('rata_rata');
            $table->timestamps();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_siswas');
    }
};
