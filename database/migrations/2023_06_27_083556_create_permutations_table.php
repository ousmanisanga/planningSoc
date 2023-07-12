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
        Schema::create('permutations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('objet');
            $table->text('motif');
            $table->string('superviseurRemplacant');
            $table->date('datePermutation');
            $table->string('heureDebut');
            $table->string('heureFin');
            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->enum('statut', ['en attente',' Accepté','Refusé'])->default('en attente');
            $table->string('superviseur');
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
        Schema::dropIfExists('permutations');
    }
};
