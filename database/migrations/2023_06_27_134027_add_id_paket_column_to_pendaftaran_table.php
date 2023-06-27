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
        Schema::table('tb_pendaftaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_paket')->after('id');
            $table->foreign('id_paket')->references('id')->on('tb_paket');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_pendaftaran', function (Blueprint $table) {
            $table->dropForeign(['id_paket']);
            $table->dropColumn('id_paket');
        });
    }
};
