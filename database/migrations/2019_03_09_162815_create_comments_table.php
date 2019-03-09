<?php
/**
 * Application
 *
 * @author       Duminda Namal
 * @version      $Id: v1.0.0 2019-March-09 Exp $;
 * @copyright    Copyright &copy; NextDevelopers.
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('postId')->unsigned()->index();
            $table->foreign('postId')->references('id')->on('posts')->onDelete('cascade');
            $table->string('commentAuthor');
            $table->text('comment');
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
        Schema::dropIfExists('comments');
    }
}
