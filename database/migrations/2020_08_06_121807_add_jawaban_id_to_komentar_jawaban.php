<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabanIdToKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_id');

            $table->foreign('jawaban_id')->references('id')->on('jawaban');

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
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->dropForeign(['profils_id']);
            $table->dropColumn(['profils_id']);

            $table->dropForeign(['jawaban_id']);
            $table->dropColumn(['jawaban_id']);
        });
    }
}
