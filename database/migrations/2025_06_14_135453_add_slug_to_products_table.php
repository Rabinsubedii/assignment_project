<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToProductsTable extends Migration
{
    public function up()
    {
        // Add the 'slug' column to the 'products' table
        if (!Schema::hasColumn('products', 'slug')) { // Check added for safety
            Schema::table('products', function (Blueprint $table) {
                $table->string('slug')->unique()->after('name')->nullable();
            });
        }
    }

    public function down()
    {
        // Remove the 'slug' column if it exists
        if (Schema::hasColumn('products', 'slug')) { // Check added for safety
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('slug');
            });
        }
    }
}