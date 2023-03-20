<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
          $table->increments('id');
          /* We started adding code here*/

            $table->text('title');  // Title of our blog post          
            $table->text('body');   // Body of our blog post                  
            $table->text('metabody');   // Body of our blog post                  
            $table->unsignedBigInteger('user_id')->nullable(); // user_id of our blog post author
            $table->string('image')->unique()->nullable();
            $table->string('slug')->unique();
            $table->foreign('user_id')->references('id')->on('users');

          /* We stopped adding code here*/

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
        Schema::dropIfExists('blog_posts');
    }
}
