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
        Schema::create('paquetes', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->unsignedInteger('id_cliente');
            $table->string('origen', 50);
            $table->string('destino', 50);
            $table->text('detalle', 100);
            $table->decimal('precio', 9, 3);
            $table->decimal('peso', 9, 3);
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade')->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
};
