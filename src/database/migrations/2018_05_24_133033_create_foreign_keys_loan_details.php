<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysLoanDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'loan_details', 
            function (Blueprint $table) {
                // fk loans
                $table->integer('loan_id')->unsigned();
                $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
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
            'loan_details', 
            function (Blueprint $table) {
                $table->dropForeign('loan_detials_loan_id_foreign');
            }
        );
    }
}
