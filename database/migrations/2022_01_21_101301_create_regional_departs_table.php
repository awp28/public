<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionalDepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regional_departs', function (Blueprint $table) {
            $table->id();
            $table->jsonb('title');
            $table->jsonb('fullname');
            $table->jsonb('position');                   // lavozimi
            $table->jsonb('address');                   // address
            $table->string('phone')->nullable();
            $table->string('map_url')->nullable();      // tarjimai hol
            $table->string('image')->nullable();
            $table->foreignId('city_id')->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('regional_departs');
    }
}
