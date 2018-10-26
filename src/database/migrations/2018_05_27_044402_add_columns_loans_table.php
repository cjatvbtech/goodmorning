<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'loans',
            function (Blueprint $table) {
                $table->integer('number_of_items');
                $table->text('requirements');
                $table->string('tracking_code', 255);
                $table->string('status', 255);
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
            'loans',
            function (Blueprint $table) {
                $table->dropColumn('number_of_items');
                $table->dropColumn('requirements');
                $table->dropColumn('tracking_code');
                $table->dropColumn('status');
            }
        );
    }
}
