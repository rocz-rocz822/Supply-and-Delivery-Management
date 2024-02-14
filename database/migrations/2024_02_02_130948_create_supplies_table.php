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
        Schema::connection('mysql_spl_dlv')->create('supplies', function (Blueprint $table) {
            $table->id();
			$table->foreignId('product_id')->constrained(config('database.connections.mysql_prd_inv.database') . '.products');
			$table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_spl_dlv')->dropIfExists('supplies');
    }
};
