<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCommerceDrugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commerce_drug', function (Blueprint $table) {
            $table->foreign('commerces_id', 'fk_commerce_drug_commerces1')->references('id')->on('commerces')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('drugs_id', 'fk_commerce_drug_drugs1')->references('id')->on('drugs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commerce_drug', function (Blueprint $table) {
            $table->dropForeign('fk_commerce_drug_commerces1');
            $table->dropForeign('fk_commerce_drug_drugs1');
        });
    }
}
