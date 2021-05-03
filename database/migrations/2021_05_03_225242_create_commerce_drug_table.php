<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommerceDrugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerce_drug', function (Blueprint $table) {
            $table->unsignedBigInteger('drugs_id')->index('fk_commerce_drug_drugs1_idx');
            $table->unsignedBigInteger('commerces_id')->index('fk_commerce_drug_commerces1_idx');
            $table->string('trade_name', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerce_drug');
    }
}
