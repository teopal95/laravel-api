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
        Schema::create('role_type', function (Blueprint $table) {
            $table->id();
             $table->string('role_type')->nullable();
            $table->timestamps();
        });

        DB::table('role_type')->insert([
            ['role_type' => 'Admin'],
            ['role_type' => 'Normal User'],         
    
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_type');
    }
};
