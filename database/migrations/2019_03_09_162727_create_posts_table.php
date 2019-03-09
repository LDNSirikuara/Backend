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

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postTitle');
            $table->text('postContent');
            $table->binary('postImage');
            $table->string('postAuthor');
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
        Schema::dropIfExists('posts');
    }
}
