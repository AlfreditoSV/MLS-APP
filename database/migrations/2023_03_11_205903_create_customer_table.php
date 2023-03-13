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
        Schema::create('customer', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('second_name');
            $table->string('cel_phone');
            $table->string('phone');
            $table->integer('posta_code');
            $table->integer('name_street');
            $table->string('external_number');
            $table->string('internal_number')->nullable($value = true);
            $table->string('name_street');
            $table->string('name_municipality');
            $table->string('name_colony');
            $table->string('name_state');
            $table->string('address_reference')->nullable($value = true);
            $table->timestamps();
            $table->primary('id');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->comment('Tabla_de_clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
};
