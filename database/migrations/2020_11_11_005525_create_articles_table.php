<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{

    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            /**general**/
            $table->string('author',150)->nullable(false);
            $table->string('section',150)->nullable(false);
            /**español**/
            $table->string('title',255)->nullable(false)->unique();
            $table->string('slug',255)->nullable(false)->unique();
            $table->text('ruta_image',4000);
            $table->text('text')->nullable(false);
            $table->string('ruta_file');
            /**english**/
            $table->string('en_title',255)->nullable(false);
            $table->string('ruta_en_image');
            $table->text('en_text',4000)->nullable(false);
            $table->string('ruta_en_file');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
