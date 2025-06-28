<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category; // Make sure this is present if you use Category in your table

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('shortdescription')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2); // Good for money values
            $table->integer('status')->length(1)->default(0);
            $table->string('image')->nullable();
            $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}