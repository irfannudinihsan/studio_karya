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
        Schema::create('karyas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('media');
            $table->text('ukuran');
            $table->integer('tahun');
            $table->text('deskripsi');
            $table->timestamp('publishes_at')->nullable(); //tipe data timpstamp
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
        Schema::dropIfExists('karyas');
    }
};
