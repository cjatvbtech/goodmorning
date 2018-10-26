<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveColumnsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'products',
            function (Blueprint $table) {
                $table->dropColumn('category_id');
                $table->dropColumn('price');
                $table->dropColumn('model');
                $table->dropColumn('brand');
                $table->dropColumn('specs');
                $table->string('type')->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'products',
            function (Blueprint $table) {
                $table->integer('category_id');
                $table->string('specs')->nullable();
                $table->string('model');
                $table->string('brand');
                $table->string('price');
                $table->dropColumn('type');
            }
        );
    }
}
