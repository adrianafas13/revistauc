<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->bigIncrements('id');

            /**español**/
            $table->string('information_title',355)->nullable(false);
            $table->text('information_text')->nullable(false);

            /**english**/
            $table->string('en_information_title',355)->nullable(false);
            $table->text('en_information_text')->nullable(false);

            /**italian**/
            $table->string('it_information_title',355)->nullable(false);
            $table->text('it_information_text')->nullable(false); 

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
        Schema::dropIfExists('information');
    }
}
