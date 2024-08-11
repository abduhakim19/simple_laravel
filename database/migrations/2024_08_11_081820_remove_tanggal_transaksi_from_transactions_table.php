<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('spareparts', function (Blueprint $table) {
            $table->dropColumn('tanggal_transaksi');
        });
    }

    public function down()
    {
        Schema::table('spareparts', function (Blueprint $table) {
            $table->date('tanggal_transaksi')->nullable(); // atau sesuai dengan tipe data yang sesuai
        });
    }
};
