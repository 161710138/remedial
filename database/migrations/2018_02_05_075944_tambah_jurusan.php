<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahJurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function($table) {
            $table->unsignedInteger('jurusan_id')->after('dosen_id')->nullable();
            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('CASCADE');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('mahasiswa', function($table) {
            $table->dropColumn('jurusan_id');
        });
    }
}
    

