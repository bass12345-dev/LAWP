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
        Schema::create('project_table', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->integer('nop_id');
            $table->integer('contractor_id');
            $table->integer('project_title');
            $table->integer('project_location');
            $table->integer('project_cost');
            $table->enum('status', ['pending', 'completed'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('project_table');
    }
};
