<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string("filename");
            $table->string("firstname");
            $table->string("middlename");
            $table->string("lastname");
            $table->string("extname");
            $table->string("birthday");
            $table->string("brgy");
            $table->string("municipality");
            $table->string("province");
            $table->string("typeofid");
            $table->string("idnumber");
            $table->string("contact");
            $table->string("typeofpayment");
            $table->string("typeofbene");
            $table->string("occupation");
            $table->string("sex");
            $table->string("civilstatus");
            $table->string("age");
            $table->string("dependent");
            $table->string("interested");
            $table->string("nameoftraining");
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
        Schema::dropIfExists('beneficiaries');
    }
}
