<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('company_id');
            $table->string('company_name', 150);
            $table->string('headquarters_phone_number', 30);
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};