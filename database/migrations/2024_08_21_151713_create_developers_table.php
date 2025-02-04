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
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('position'); // программист, администратор, devops, дизайнер
            $table->string('email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->foreignId('project_id')->nullable()->constrained('projects')->nullOnDelete('set null');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developers');
    }
};
