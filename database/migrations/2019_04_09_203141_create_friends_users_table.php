<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateFriendsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends_users', function (Blueprint $table) {
          $table->integer('friend_id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->boolean('approved')->default('False');
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('friend_id')->references('id')->on('users');
          $table->primary(array('user_id', 'friend_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends_users');
    }
}
