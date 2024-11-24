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
        Schema::create('sesions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trainer_id')->constrained('users')->onDelete('cascade'); // Foreign key referencing 'users' table
            $table->string('name'); // Name of the session
            $table->text('description'); 
            $table->string("image");// Description of the session
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string("day"); // Date and time of the session
            $table->boolean('is_premium')->default(false); // Indicates if the session is premium
            $table->boolean('available')->default(true);
           // Indicates if the session is available
            $table->integer('spots')->nullable(); // Number of available spots
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesions');
    }
};
