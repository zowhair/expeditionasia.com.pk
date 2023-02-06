<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tours;


class CreateItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->integer('day');
            $table->string('program');
            $table->string('overnight');
            // $table->('id');
            $table->foreignId('it_id')->references('id')->on('tours')->onDelete('restrict');
            // $table->foreignId('it_id')->constrained()->onDelete('restrict');
            $table->string('plholder');

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
        Schema::dropIfExists('itineraries');
    }
}
