<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->text('description')->nullable()->after('content');
            $table->text('content');
            $table->string('photo')->nullable()->after('content');
            $table->unsignedInteger('user_id');
            $table->boolean('isPublished')->default(1);
            $table->timestamps();

            $table->index('user_id','post_user_idx');
            $table->foreign('user_id', 'post_user_fk')->on('users')->references('id');

            $table->softDeletes();
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
