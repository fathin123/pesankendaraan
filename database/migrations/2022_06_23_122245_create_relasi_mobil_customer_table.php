<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelasiMobilCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function(Blueprint $table){
            $table->dropColumn('merk'); //Menghapus kolom kelas
            $table->unsignedBigInteger('id_mobil')->nullable(); //menambahkan kolom kelas_id
            $table->foreign('id_mobil')->references('id')->on('mobils'); //menambahkan foreign key ke kolom kelas_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function(Blueprint $table){
            $table->string('merk');
            $table->dropForeign(['id_mobil']);
        });
    }
}
