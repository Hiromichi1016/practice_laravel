<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('body');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
