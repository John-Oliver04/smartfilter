<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_collections', function (Blueprint $table) {
            $table->id();
            $table->string("adl")->NULL();
            $table->string("firstname")->NULL();
            $table->string("middlename")->NULL();
            $table->string("lastname")->NULL();
            $table->string("extname")->NULL();
            $table->string("birthday")->NULL();
            $table->string("brgy")->NULL();
            $table->string("municipality")->NULL();
            $table->string("province")->NULL();
            $table->string("typeofid")->NULL();
            $table->string("idnumber")->NULL();
            $table->string("contact")->NULL();
            $table->string("typeofpayment")->NULL();
            $table->string("typeofbene")->NULL();
            $table->string("occupation")->NULL();
            $table->string("sex")->NULL();
            $table->string("civilstatus")->NULL();
            $table->string("age")->NULL();
            $table->string("dependent")->NULL();
            $table->string("interested")->NULL();
            $table->string("nameoftraining")->NULL();
            $table->string("uploader")->NULL();
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
        Schema::dropIfExists('table_collections');
    }
}
