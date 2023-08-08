<?php

use App\Models\Organization;
use App\Models\Provenance;
use App\Models\ViolenceType;
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
        Schema::create('victims', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('age')->default(0);
            $table->string('contact')->nullable();
            $table->longText('violence_description');
            $table->foreignIdFor(Provenance::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Organization::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(ViolenceType::class)->constrained()->cascadeOnDelete();
            $table->dateTime('date')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('victims');
    }
};
