<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubscriberWebsites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriber_websites', function (Blueprint $table) {
            $table->foreignId('website_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('subscriber_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['website_id', 'subscriber_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subscriber_websites');
    }
}
