<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('billdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bill'); //ID khách hàng (khóa ngoại)
            $table->unsignedBigInteger('id_goods');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billdetail');
    }
};