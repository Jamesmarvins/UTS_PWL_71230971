<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->string('item_code', 30)->primary();
            $table->string('item', 150);
            $table->decimal('unit_price', 12, 2);
            $table->unsignedBigInteger('company_id');
            $table->timestamps();
 
            $table->foreign('company_id')
                ->references('company_id')->on('companies')
                ->cascadeOnUpdate()->restrictOnDelete();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};