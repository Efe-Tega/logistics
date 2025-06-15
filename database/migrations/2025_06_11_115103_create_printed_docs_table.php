<?php

use App\Models\Tracking;
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
        Schema::create('printed_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tracking::class)->constrained()->cascadeOnDelete();
            $table->string('bank_name')->nullable();
            $table->string('acct_no')->nullable();
            $table->integer('frieght_amount')->nullable();
            $table->integer('warehouse_fee')->nullable();
            $table->integer('custom_fee')->nullable();
            $table->string('payment_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('printed_docs');
    }
};
