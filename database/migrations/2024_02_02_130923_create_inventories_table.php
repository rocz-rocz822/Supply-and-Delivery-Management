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
        Schema::connection('mysql_prd_inv')->create('inventories', function (Blueprint $table) {
            $table->id();
			$table->foreignId('product_id')->constrained('products');
			$table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_prd_inv')->dropIfExists('inventories');
    }
};
