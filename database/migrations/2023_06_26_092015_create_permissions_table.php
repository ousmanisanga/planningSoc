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
        Schema::create('permissions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('objet');
            $table->string('motif');
            $table->date('dateDepart');
            $table->string('heureDepart');
            $table->date('dateFin');
            $table->string('heureFin');
            $table->enum('statut', ['en attente', 'Accepté', 'Refusé'])->default('en attente');
            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->string('superviseur');




            // 0: user, 1: admin

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
        Schema::dropIfExists('permissions');
    }
};
