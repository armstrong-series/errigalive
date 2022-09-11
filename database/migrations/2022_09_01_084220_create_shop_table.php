<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('item')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_uuid')->nullable();
            $table->float('price')->nullable();
            $table->enum('category', ["cosmetics", "laundry", "wears", "gadgets", "entertainment"]);
            $table->text('description')->nullable();
            $table->integer('quantity')->nullable();
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
        Schema::dropIfExists('shop');
    }
}
