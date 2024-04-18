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
        Schema::create('downloadeds', function (Blueprint $table) {
            $table->id();
            $table->longText('konten');
            $table->string('template_naskah');
            $table->string('file_keaslian');
            $table->string('pedoman_penulisan_buku_ajar');
            $table->string('pedoman_penulisan_buku_referensi');
            $table->string('pedoman_penulisan_buku_monograf');
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
        Schema::dropIfExists('downloadeds');
    }
};
