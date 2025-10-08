<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('time_tracks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_id'); 
            $table->string('Reason', 255);
            $table->string('Location', 255);
            $table->enum('Type', ['IN', 'OUT']); 
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('time_tracks');
    }
};
