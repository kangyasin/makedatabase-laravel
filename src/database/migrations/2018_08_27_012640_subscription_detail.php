<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubscriptionDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('subscription_details')) {
        // create the plan_subscription_usages table
    
            Schema::create('subscription_details', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('subscription_id')->unsigned();
                $table->integer('feature_id')->unsigned();
                $table->integer('addon_id')->unsigned();
                $table->string('code');
                $table->smallInteger('used')->unsigned();
                $table->timestamp('valid_until')->nullable();
                $table->timestamps();

                $table->foreign('feature_id')->references('id')->on('ms_features');
                $table->foreign('addon_id')->references('id')->on('ms_addons');
                $table->foreign('subscription_id')->references('id')->on('subscriptions');

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
        Schema::drop('subscription_details');
    }
}
