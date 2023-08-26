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
        Schema::create('logdatas', function (Blueprint $table) {
            $table->id();
            $table->uuid('alat_id');
            $table->foreign('alat_id')->references('id')->on('dashboards')->cascadeOnDelete()->cascadeOnUpdate();
            $table->float('ph', 10, 2)->default(0);
            $table->float('suhu', 10, 2)->default(0);
            $table->float('amonia', 10, 2)->default(0);
            $table->float('tds', 10, 2)->default(0);
            $table->float('tss', 10, 2)->default(0);
            $table->float('salinitas', 10, 2)->default(0);
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logdatas');
    }
};
