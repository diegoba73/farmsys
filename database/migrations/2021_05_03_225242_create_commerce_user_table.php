<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommerceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerce_user', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id')->index('fk_commerce_user_users1_idx');
            $table->unsignedBigInteger('commerces_id')->index('fk_commerce_user_commerces1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerce_user');
    }
}
