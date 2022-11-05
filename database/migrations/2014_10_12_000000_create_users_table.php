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

         if (!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
            $table->id()->startingValue(500);
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // $table->string('customerName');
            // $table->string('contactFirstName');
            // $table->string('contactLastName');
            // $table->Integer('phone');                
            // $table->string('addressLine1');
            // $table->string('addressLine2')->nullable();
            // $table->string('city');
            // $table->string('state')->nullable();
            // $table->string('postalCode');
            // $table->string('country');
                
            $table->timestamps();
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
    //     Schema::dropIfExists('users');
    // }
};
