<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->string('purchase_number', 30)->primary();
            $table->date('date_of_purchase');
            $table->unsignedBigInteger('customer_id');
            $table->string('item_code', 30);
            $table->timestamps();
 
            $table->foreign('customer_id')
                ->references('customer_id')->on('customers')
                ->cascadeOnUpdate()->restrictOnDelete();
 
            $table->foreign('item_code')
                ->references('item_code')->on('items')
                ->cascadeOnUpdate()->restrictOnDelete();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};