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
        Schema::connection('mysql_spl_dlv')->create('stock_orders', function (Blueprint $table) {
            $table->id();
			$table->integer('quantity');
			$table->string('tracking_number', 40);
			$table->foreignId('product_id')->constrained(config('database.connections.mysql_prd_inv.database') . '.products');
			$table->foreignId('supplier_id')->constrained('users', 'id');
			$table->foreignId('transaction_id')->nullable()->constrained('transactions');
			$table->foreignId('delivery_id')->nullable()->constrained('deliveries');
			$table->integer('status')->default(0);
			$table->timestamp('estimated_delivery_at');
			$table->timestamp('delivered_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_spl_dlv')->dropIfExists('stock_orders');
    }
};
