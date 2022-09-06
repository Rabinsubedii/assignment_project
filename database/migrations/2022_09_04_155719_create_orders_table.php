<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); ;
            $table->string('email')->nullable(); ;
            $table->string('phone')->nullable(); ;
            $table->string('Address')->nullable(); ;
            $table->text('user_remarks')->nullable(); 
            $table->text('admin_remarks')->nullable(); 
            $table->foreignIdFor(Product::class)->nullable(); ;
            $table->string('quantity')->nullable(); ;
             $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
