<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal("shoping_fees",8,2)->nullable();
            $table->time("estimated_delivery_date");
            $table->enum("status",['Pendding', 'Accepted', 'Rejected', 'Shipped', 'Deliverd', 'Refund'])->nullable();
            $table->foreignId("user_id")->nullable()->constrained("users");
            $table->foreignId("payment_method_id")->nullable()->constrained("payment_methods");
            $table->foreignId("shoping_company_id")->nullable()->constrained("shoping_companies");
            $table->foreignId("shipped_address_id")->nullable()->constrained("user_contacts");
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
        Schema::dropIfExists('orders');
    }
}
