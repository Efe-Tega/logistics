<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('shipper_fullname')->nullable();
            $table->string('shipper_email')->nullable();
            $table->string('shipper_phone')->nullable();
            $table->string('shipper_address')->nullable();
            $table->string('shipper_gender')->nullable();
            $table->string('shipper_state')->nullable();
            $table->string('shipper_city')->nullable();
            $table->string('shipper_country')->nullable();
            $table->string('shipper_postal')->nullable();

            $table->string('receiver_fullname')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_address')->nullable();
            $table->string('receiver_gender')->nullable();
            $table->string('receiver_state')->nullable();
            $table->string('receiver_city')->nullable();
            $table->string('receiver_country')->nullable();
            $table->string('receiver_postal')->nullable();

            $table->string('tracking_no')->nullable();
            $table->string('freight_type')->nullable();
            $table->string('shipment_content')->nullable();
            $table->string('shipment_desc')->nullable();
            $table->string('shipment_weight')->nullable();
            $table->string('shipment_status')->nullable();
            $table->string('take_off')->nullable();
            $table->string('final_destination')->nullable();
            $table->date('date_shipped')->nullable();
            $table->string('time_shipped')->nullable();
            $table->date('expected_delivery_date')->nullable();
            $table->string('expected_delivery_time')->nullable();
            $table->date('actual_delivery_date')->nullable();
            $table->string('actual_delivery_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
