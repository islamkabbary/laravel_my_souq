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
            $table->id();
            $table->string("name")->nullable();
            $table->decimal("price",8,2)->nullable();
            $table->decimal("offer_price",8,2);
            $table->decimal("qty",8,2)->nullable();
            $table->boolean("free_shipping")->default(0)->nullable();
            $table->text("description");
            $table->foreignId("seller_id")->nullable()->constrained("users");
            $table->foreignId("brand_id")->nullable()->constrained("brands");
            $table->foreignId("category_id")->nullable()->constrained("categories");
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
