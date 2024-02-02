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
		Schema::connection('mysql_spl_dlv')->create('users', function (Blueprint $table) {
			$table->id();
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('last_name');
			$table->string('email')->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->string('phone_number')->unique();
			$table->foreignId('role_id')->constrained('roles');
			$table->rememberToken();
			$table->timestamps();

		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_spl_dlv')->dropIfExists('users');
    }
};
