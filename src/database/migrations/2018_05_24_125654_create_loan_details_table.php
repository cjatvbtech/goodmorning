<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'loan_details', 
            function (Blueprint $table) {
                // primary table key
                $table->increments('id');

                $table->string('first_name', 255);
                $table->string('middle_name', 255);
                $table->string('last_name', 255);
                $table->string('email', 255);
                $table->string('tin');
                $table->string('sss');
                $table->date('birthday');
                $table->string('mobile_number');

                $table->string('home_address', 255);
                $table->string('home_phone');

                $table->string('company_name', 255);
                $table->string('company_address', 255);
                $table->string('company_phone');
                $table->string('company_email');
                $table->date('company_established_date');

                $table->timestamps();
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
        Schema::dropIfExists('loan_details');
    }
}
