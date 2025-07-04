<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pengajuans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('npm');
        $table->string('perusahaan');
        $table->string('alamat');
        $table->date('tanggal_pengajuan');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
