<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->foreign('id_status_user')->references('id_status_user')->on('status_user');
            $table->foreign('id_school')->references('id_school')->on('school');
        });

        Schema::table('event', function (Blueprint $table) {
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_status_event')->references('id_status_event')->on('status_event');
        });

        Schema::table('picture_event', function (Blueprint $table) {
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_event')->references('id_event')->on('event');
        });

        Schema::table('register', function (Blueprint $table) {
            $table->foreign('id_event')->references('id_event')->on('event');
            $table->foreign('id_user')->references('id_user')->on('user');
        });

        Schema::table('like', function (Blueprint $table) {
            $table->foreign('id_picture_event')->references('id_picture_event')->on('picture_event');
            $table->foreign('id_user')->references('id_user')->on('user');
        });

        Schema::table('comment', function (Blueprint $table) {
            $table->foreign('id_picture_event')->references('id_picture_event')->on('picture_event');
            $table->foreign('id_user')->references('id_user')->on('user');
        });

        Schema::table('order', function (Blueprint $table) {
            $table->foreign('id_user')->references('id_user')->on('user');
        });

        Schema::table('include', function (Blueprint $table) {
            $table->foreign('id_order')->references('id_order')->on('order');
            $table->foreign('id_product')->references('id_product')->on('product');
        });

        Schema::table('product', function (Blueprint $table) {
            $table->foreign('id_category')->references('id_category')->on('category');
        });

        Schema::table('vote', function (Blueprint $table) {
            $table->foreign('id_event')->references('id_event')->on('event');
            $table->foreign('id_user')->references('id_user')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
