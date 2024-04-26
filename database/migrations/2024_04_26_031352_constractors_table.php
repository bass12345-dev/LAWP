<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('constractors_table', function (Blueprint $table) {
            $table->bigIncrements('constractor_id');
            $table->integer('contractor');
            $table->integer('proprietor');
            $table->integer('address');
            $table->integer('phone_number');
            $table->integer('pn_owner');
            $table->integer('email_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('constractors_table');
    }
};
