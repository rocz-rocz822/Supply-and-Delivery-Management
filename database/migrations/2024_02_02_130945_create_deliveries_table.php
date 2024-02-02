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
        Schema::connection('mysql_spl_dlv')->create('deliveries', function (Blueprint $table) {
            $table->id();
			$table->string('courier_name');
			$table->string('tracking_number');
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
        Schema::connection('mysql_spl_dlv')->dropIfExists('deliveries');
    }
};
