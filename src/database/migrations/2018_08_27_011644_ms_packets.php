<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MsPackets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ms_packets')) {
            // create the plan_subscription_usages table
            Schema::create('ms_packets', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->string('name');
                $table->text('description')->nullable();
                $table->string('value');
                $table->decimal('price', 7, 2)->default('0.00');
                $table->smallInteger('sort_order')->nullable();
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
        Schema::drop('ms_packets');        
    }
}
