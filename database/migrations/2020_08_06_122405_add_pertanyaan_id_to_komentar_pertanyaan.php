<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanIdToKomentarPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id');

            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');

            $table->unsignedBigInteger('profil_id');

            $table->foreign('profil_id')->references('id')->on('profils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            $table->dropForeign(['profils_id']);
            $table->dropColumn(['profils_id']);

            $table->dropForeign(['pertanyaan_id']);
            $table->dropColumn(['pertanyaan_id']);
        });
    }
}
