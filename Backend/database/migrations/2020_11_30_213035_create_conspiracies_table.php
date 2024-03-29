<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConspiraciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conspiracies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('hashtag_id')->constrained()->onDelete('cascade');
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
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
        Schema::dropIfExists('conspiracies');
    }
}
