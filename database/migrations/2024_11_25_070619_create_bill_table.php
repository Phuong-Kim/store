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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer'); //ID khách hàng (khóa ngoại)
            $table->unsignedBigInteger('id_staff');
            $table->date('date');
            $table->decimal('price'); // Giá trị hóa đơn (số thập phân)
            $table->timestamps();

            // Thiết lập khóa ngoại

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
        // $table->dropForeign(['idKH']);
        //$table->dropForeign(['idnvien']);
    }
};
