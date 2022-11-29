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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->text('fullname');
            $table->text('alamat');
            $table->text('produk');
            $table->text('nomor_telpon');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('total');
            $table->enum('metode', ['BCA', 'COD', 'DANA', 'GOPAY']);
            $table->enum('status', ['Diproses', 'Selesai']);
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
        Schema::dropIfExists('order');
    }
};