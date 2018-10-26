<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNullableApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'applications',
            function (Blueprint $table) {
                $table->date('established_date')->nullable()->change();
                $table->string('company_name', 255)->nullable()->change();
                $table->string('company_address', 255)->nullable()->change();
                $table->string('company_phone')->nullable()->change();
                $table->string('company_email')->nullable()->change();
                $table->string('company_tin')->nullable()->change();
                $table->integer('number_of_items')->nullable()->change();
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
        //
    }
}
