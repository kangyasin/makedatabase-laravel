<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MsTax extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ms_tax')) {
            // create the plan_subscription_usages table
            Schema::create('ms_tax', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->string('name');
                $table->double('rate', 8, 2);
                $table->enum('type', ['percentage(%)', 'fixed(Rp)']);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ms_tax');
    }
}
