<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCommerceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commerce_user', function (Blueprint $table) {
            $table->foreign('commerces_id', 'fk_commerce_user_commerces1')->references('id')->on('commerces')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('users_id', 'fk_commerce_user_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commerce_user', function (Blueprint $table) {
            $table->dropForeign('fk_commerce_user_commerces1');
            $table->dropForeign('fk_commerce_user_users1');
        });
    }
}
