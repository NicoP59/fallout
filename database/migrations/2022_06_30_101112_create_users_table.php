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
        Schema::create('users', function (Blueprint $table) {
            $table->id('iduser');
            $table->foreignId('idabri')->nullable()->constrained('abris');
            $table->foreignId('iditem')->nullable()->constrained('items');
            $table->foreignId('idconfrerie')->nullable()->constrained('confreries');
            $table->string('nom');
            $table->string('prenom');
            $table->tinyInteger('age')->nullable();
            $table->boolean('sexe')->nullable();
            $table->string('email')->unique();
            $table->timestamp('isVerified')->nullable();
            $table->string('mdp');
            $table->string('type');
            $table->string('avatar');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
