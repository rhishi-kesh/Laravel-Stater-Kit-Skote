<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platform_id')->constrained('platforms')->onDelete('cascade');
            $table->string('title')->unique();
            $table->string('image')->nullable();
            $table->string('seller');
            $table->enum('type', ['voucher', 'gift card']);
            $table->float('base_price');
            $table->float('discount')->nullable();
            $table->integer('stock');
            $table->string('usage')->nullable()->default('global');
            $table->text('description')->nullable();
            $table->string('delivery_time')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
