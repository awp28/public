<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProTeachingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_teachings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->jsonb('name_center');
            $table->jsonb('full_name');
            $table->string('phone');
            $table->jsonb('destination');
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
        Schema::dropIfExists('pro_teachings');
    }
}
