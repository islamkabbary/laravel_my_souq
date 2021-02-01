<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopingCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoping_companies', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->decimal("fees",8,2)->nullable()->default(50);
            $table->integer("estimated_shipping_durcation")->default(3);
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
        Schema::dropIfExists('shoping_companies');
    }
}
