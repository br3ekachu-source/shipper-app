<?php

use App\Models\Address;
use App\Models\AdvertGeneralInformation;
use App\Models\User;
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
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Address::class);
            $table->text('description'); //описание
            $table->integer('exploitation_type'); //коммерческий/некоммерческий 
            $table->integer('self_propelled'); //самоходность
            $table->boolean('valid_documents'); //действующие документы
            $table->boolean('was_registered')->nullable(); //было ли на учете
            $table->boolean('was_registered_more_than_5_year_ago')->nullable(); //находилось на учете больше 5 лет назад?
            $table->integer('full_sizeble')->nullable(); //полноразмерное/маломерное
            $table->integer('boat_status')->nullable(); //статус судна
            $table->integer('object_status')->nullable(); //статус объекта
            $table->foreignIdFor(AdvertGeneralInformation::class); //общие сведения


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adverts');
    }
};
