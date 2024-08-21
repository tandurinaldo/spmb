<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('Nama Lengkap');
            $table->string('Kewarganegaraan');
            $table->string('Propinsi');
            $table->string('Kota');
            $table->string('Alamat');
            $table->integer('Kode pos');
            $table->string('Email');
            $table->integer('No hp');
            $table->string('Pendidikan terakhir');
            $table->string('Tahun lulus');
            $table->string('kewarganegaraan2');
            $table->string('Propinsi2');
            $table->string('Kota2');
            $table->string('Nama sekolah');
            $table->string('jurusan');
            $table->string('Prodi');
            $table->string('pataum');
            $table->string('online');
            $table->string('offline');
            $table->string('petugas');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
