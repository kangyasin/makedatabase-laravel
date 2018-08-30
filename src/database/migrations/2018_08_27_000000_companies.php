<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Companies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('companies')) {
            // create the plan_subscription_usages table
            Schema::create('companies', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->string('name');
                $table->enum('db_isset', ['ready', 'not ready']);
                $table->text('db_user');
                $table->text('db_name');
                $table->text('db_host');
                $table->text('db_password');
                $table->text('token');
                $table->string('alias', 5);
                $table->integer('quota')->unsigned();
                $table->text('company_addres');
                $table->string('company_city');
                $table->integer('company_zip');
                $table->string('company_number');
                $table->string('company_phone');
                $table->string('industry');
                $table->string('country');
                $table->integer('total_employee')->unsigned();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('pic_address');
                $table->string('pic_city');
                $table->string('pic_country');
                $table->integer('pic_zip');
                $table->string('phone1');
                $table->string('phone2');
                $table->integer('balance');
                $table->enum('status', ['active', 'fereeze', 'deleted']);
                $table->date('latest_reset_leave');
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
        Schema::drop('companies');
    }
}
