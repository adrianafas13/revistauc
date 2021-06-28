<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            /*spanish*/
            $table->string('name_author',150)->nullable(false);
            $table->string('lastname_author',150)->nullable(false);
            $table->string('email_author',60)->nullable(false)->unique();
            $table->string('grades_author',300)->nullable(false);
            $table->string('resume_author',900)->nullable(false);
            $table->text('route_image_author');

            /*english*/
            $table->string('en_grades_author',300)->nullable(false);
            $table->string('en_resume_author',900)->nullable(false);

            /*italian*/
            $table->string('it_grades_author',300)->nullable(false);
            $table->string('it_resume_author',900)->nullable(false);
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
        Schema::dropIfExists('authors');
    }
}
