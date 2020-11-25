<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('voornaam');
            $table->string('tussenvoegsel');
            $table->string('achternaam');
            $table->string('email');
            $table->string('soortlid');
            $table->date('geboortedatum');
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('telefoonnummer');
            $table->boolean('betaald');
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
        Schema::dropIfExists('members');
    }
}
