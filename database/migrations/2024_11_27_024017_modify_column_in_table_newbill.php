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
        Schema::table('newbill', function (Blueprint $table) {

            $table->foreign('id_customer') // Add foreign key constraint
                ->references('id')->on('customer');
            $table->foreign('id_staff') // Add foreign key constraint
                ->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_newbill', function (Blueprint $table) {
            //
        });
    }
};
