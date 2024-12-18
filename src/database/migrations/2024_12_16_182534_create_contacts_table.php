<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('categry_id')->unsigned();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->enum('gender',['男性','女性','その他']);
            $table->string('email', 255);
            $table->string('tel', 255);
            $table->string('address', 255);
            $table->string('building', 255);
            $table->text('detail');
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
        Schema::dropIfExists('contacts');
    }
}
