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
        Schema::create('workers_table', function (Blueprint $table) {
            $table->bigIncrements('worker_id');
            $table->integer('project_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('extension')->nullable();
            $table->string('address');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->timestamps();
        });

  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('workers_table');
    }
    
};
