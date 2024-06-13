<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('airline');
            $table->date('date_of_journey');
            $table->string('source');
            $table->string('destination');
            $table->string('route');
            $table->time('dep_time');
            $table->time('arrival_time');
            $table->string('duration');
            $table->string('total_stops');
            $table->string('additional_info')->nullable();
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
