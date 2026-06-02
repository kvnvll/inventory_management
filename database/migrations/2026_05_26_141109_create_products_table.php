<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            $table->foreignId('supplier_id');

            $table->foreignId('category_id');

            $table->string('name');

            $table->string('barcode');

            $table->decimal('price', 10, 2);

            $table->integer('stock');

            $table->date('expiration_date')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};