<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->jsonb('fullname');
            $table->jsonb('department');                 // bo'limi
            $table->jsonb('position');                   // lavozimi
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->jsonb('biography')->nullable();      // tarjimai hol
            $table->jsonb('reception_days')->nullable();
            $table->integer('ordered')->nullable();        //1 - leader,  2- employee
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
        Schema::dropIfExists('teams');
    }
}
