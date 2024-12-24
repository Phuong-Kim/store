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
        // Xóa bảng student nếu tồn tại
        Schema::dropIfExists('bill');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bill', function (Blueprint $table) {
            //
        });
    }
};
