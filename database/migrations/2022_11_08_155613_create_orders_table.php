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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid");
            $table->integer('user_id');
            $table->string('products');
            $table->string('amount');
            $table->string('address');
            $table->string('phone');
            $table->text('notes')->nullable();
            $table->text('infos')->nullable();
            $table->string("tracking_code")->unique();
            $table->enum('status', ['PENDING', 'FAILED', 'SUCCESS']);
            $table->string('payment_mode');
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
};
