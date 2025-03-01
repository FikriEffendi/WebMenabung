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
        if (!Schema::hasTable('savings')) {
            Schema::create('savings', function (Blueprint $table) {
                $table->id();
                $table->string('item_name');
                $table->decimal('target_amount', 10, 2);
                $table->string('currency');
                $table->decimal('daily_amount', 10, 2);
                $table->enum('frequency', ['Harian', 'Mingguan', 'Bulanan']);
                $table->enum('status', ['active', 'done'])->default('active');
                $table->date('start_date')->default(now());
                $table->timestamps();

                $table->foreign('id')->references('id')->on('users');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings');
    }
};
