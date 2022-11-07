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

        if (!Schema::hasTable('carts')){
            Schema::create('carts', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('customerNumber');
                $table-	varchar('productCode',15);
                $table->integer('quantity');
                $table->timestamps();

                $table->foreign('productCode')->references('productCode')->on('products')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('customerNumber')->references('customerNumber')->on('customers')->onDelete('cascade');
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    // public function down()
    // {
    //     Schema::dropIfExists('carts');
    // }

};
