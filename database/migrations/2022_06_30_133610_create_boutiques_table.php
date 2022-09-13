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
        Schema::create('boutiques', function (Blueprint $table) {
            $table->id('idproduit');
            $table->foreignId('iduser')->constrained('users');
            $table->string('nom');
            $table->mediumText('description');
            $table->string('prix');
            $table->string('img', 300);
            $table->string('quantité');
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
        Schema::dropIfExists('boutiques');
    }
};
