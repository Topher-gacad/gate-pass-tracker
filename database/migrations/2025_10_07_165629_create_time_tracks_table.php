<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('time_tracks', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique;
            $table->unsignedBigInteger('user_id'); 
            $table->string('reason', 255);
            
            $table->enum('type', ['in', 'out']); 
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('time_tracks');
    }
};
