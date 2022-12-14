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
        if (!Schema::hasTable('customers')){
            Schema::create('customers', function (Blueprint $table) {
                $table->foreign('customerNumber');
                $table->string('customerName');
                $table->string('contactFirstName');
                $table->string('contactLastName');
                $table->Integer('phone');
                $table->string('addressLine1');
                $table->string('addressLine2')->nullable();
                $table->string('city');
                $table->string('state')->nullable();
                $table->string('postalCode')->nullable();
                $table->string('country');
                $table->timestamps();

                $table->foreign('customerNumber')->references('id')->on('user')->onDelete('cascade');
            });
            //code
            
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   
};