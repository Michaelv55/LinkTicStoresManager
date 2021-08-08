<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('sku', 120)->nullable(false)->primary();
            $table->string('name', 80)->nullable(false)->index();
            $table->text('description')->nullable(false);
            $table->integer('value', false, true)->nullable(false);
            $table->text('image')->nullable(false);
            $table->foreignId('id_store')->constrained('stores');
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
        Schema::dropIfExists('products');
    }
}
