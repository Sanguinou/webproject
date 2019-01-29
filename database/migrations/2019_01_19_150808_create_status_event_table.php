<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_event', function (Blueprint $table) {
            $table->increments('id_status_event');
            $table->char('status_event_name', 32);
            $table->timestamps();
        });

        DB::table('status_event')->insert([
            ['status_event_name' => 'idea'],
            ['status_event_name' => 'available'],
            ['status_event_name' => 'done'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_event');
    }
}
