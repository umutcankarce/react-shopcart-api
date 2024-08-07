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
        Schema::create('products', function (Blueprint $table) {
            $table->id("prd_id");
            $table->string("prd_name")->nullable();
            $table->double("prd_price")->nullable();
            $table->softDeletes();
            $table->timestamp("prd_created_at")->nullable();
            $table->timestamp("prd_updated_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
