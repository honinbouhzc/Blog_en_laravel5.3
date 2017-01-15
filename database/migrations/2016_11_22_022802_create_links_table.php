<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('links', function (Blueprint $table) {
            $table->engine ='MyISAM';
            $table->increments('link_id');
            $table->string('link_name')->default('')->comment('//name');
            $table->string('link_title')->default('')->comment('//title');
            $table->string('link_url')->default('')->comment('//link');
            $table->integer('link_order')->default(0)->comment('//order');
        });
    }
   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('links');
    }
}
