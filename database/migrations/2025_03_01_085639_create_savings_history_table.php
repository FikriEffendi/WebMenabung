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
        if (!Schema::hasTable('savings_history')) {
            Schema::create('savings_history', function (Blueprint $table) {
                $table->id();
                $table->decimal('amount', 10, 2);
                $table->string('description')->nullable();
                $table->enum('type', ['Tambah', 'Kurangi']);
                $table->timestamps();

                $table->foreign('id')->references('id')->on('savings');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings_history');
    }
};
