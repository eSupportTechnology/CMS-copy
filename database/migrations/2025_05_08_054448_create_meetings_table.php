<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('meetings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('inquiry_id')->constrained()->onDelete('cascade');
        $table->dateTime('meeting_date');
        $table->enum('meeting_location', ['online', 'onsite']);
        $table->enum('meeting_status', ['scheduled', 'held', 'missed'])->default('scheduled');
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetings');
    }
};
