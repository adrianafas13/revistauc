<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->bigIncrements('id');
            /*spanish*/
            $table->text('route_image_edition');
            $table->string('title_edition',1500)->nullable(false);
            $table->integer('number_edition')->nullable(false);
            /*english*/
            $table->text('en_route_image_edition');
            $table->string('en_title_edition',1500)->nullable(false);
            $table->integer('en_number_edition')->nullable(false);
            /*italian*/
            $table->text('it_route_image_edition');
            $table->string('it_title_edition',1500)->nullable(false);
            $table->integer('it_number_edition')->nullable(false);
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
        Schema::dropIfExists('editions');
    }
}
