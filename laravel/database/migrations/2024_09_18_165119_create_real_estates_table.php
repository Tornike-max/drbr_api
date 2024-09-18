<?php

use App\Models\Agent;
use App\Models\City;
use App\Models\Region;
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
        Schema::create('real_estates', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->text('image');
            $table->foreignIdFor(Region::class);
            $table->longText('description');
            $table->foreignIdFor(City::class);
            $table->text('zip_code');
            $table->integer('price');
            $table->integer('area');
            $table->integer('bedrooms');
            $table->boolean('is_rental');
            $table->foreignIdFor(Agent::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real_estates');
    }
};
