<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'loans', 
            function (Blueprint $table) {
                // primary table key
                $table->increments('id');

                $table->string('first_name', 255);
                $table->string('middle_name', 255);
                $table->string('last_name', 255);
                $table->string('email', 255);
                $table->string('tin');
                $table->string('sss');
                $table->date('birthdate');
                $table->string('home_mobile');
                $table->string('home_address', 255);
                $table->string('home_phone');

                $table->date('established_date');
                $table->string('company_name', 255);
                $table->string('company_address', 255);
                $table->string('company_phone');
                $table->string('company_email');
                $table->string('company_tin');

                $table->string('type');

                // basic info
                $table->date('denied_at')->nullable();
                $table->date('approved_at')->nullable();
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
        Schema::dropIfExists('loans');
    }
}
