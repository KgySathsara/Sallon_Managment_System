<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('payment_bills', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('service_id');
        $table->string('title');
        $table->decimal('price', 8, 2);
        $table->timestamps();

        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('payment_bills');
}
};
