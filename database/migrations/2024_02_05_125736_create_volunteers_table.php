<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('gender');
            $table->string('cid');
            $table->date('dob');
            $table->string('village');
            $table->string('geog');
            $table->string('dzongkhag');
            $table->string('nationality');
            $table->string('email');
            $table->string('phone');
            $table->text('mailingAddress');
            $table->text('areasOfInterest')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
}
