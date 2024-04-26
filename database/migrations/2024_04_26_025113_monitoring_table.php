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
        Schema::create('monitoring_table', function (Blueprint $table) {
            $table->bigIncrements('monitoring_id');
            $table->integer('project_id');
            $table->string('activity');
            $table->dateTime('date_of_monitoring', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('monitoring_table');
    }
};
