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
        Schema::create('incidents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nomIncident');
            $table->date('dateIncident');
            $table->time('heureIncident');
            $table->text('observation');
            $table->string('superviseurRemplacant');
            $table->time('heureRetourNormal')->nullable()->default('00:00:00');
            $table->foreignUuid('user_id')->references('id')->on('users');

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
        //
    }
};
