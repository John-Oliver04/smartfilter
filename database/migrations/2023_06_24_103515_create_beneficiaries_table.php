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
            $table->string("adl")->null();
            $table->string("firstname")->null();
            $table->string("middlename")->null();
            $table->string("lastname")->null();
            $table->string("extname")->null();
            $table->string("birthday")->null();
            $table->string("brgy")->null();
            $table->string("municipality")->null();
            $table->string("province")->null();
            $table->string("typeofid")->null();
            $table->string("idnumber")->null();
            $table->string("contact")->null();
            $table->string("typeofpayment")->null();
            $table->string("typeofbene")->null();
            $table->string("occupation")->null();
            $table->string("sex")->null();
            $table->string("civilstatus")->null();
            $table->string("age")->null();
            $table->string("dependent")->null();
            $table->string("interested")->null();
            $table->string("nameoftraining")->null();
            $table->string("uploader")->null();
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
