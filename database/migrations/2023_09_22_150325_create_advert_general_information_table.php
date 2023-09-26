<?php

use App\Models\Advert;
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
        Schema::create('advert_general_information', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Advert::class);
            $table->integer('deadweight'); //дедвейт
            $table->year('building_year'); //год постройки
            $table->integer('displacement'); //водоизмещение
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advert_general_information');
    }
};
