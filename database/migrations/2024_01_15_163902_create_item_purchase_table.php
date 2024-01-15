<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_purcahse', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->onUpdate('cascase');
            $table->foreignId('purchase_id')->constrained()->onUpdate('cascase');
            $table->integer('quantity');
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
        Schema::dropIfExists('item_purcahse');
    }
};
