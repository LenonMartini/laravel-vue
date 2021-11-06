<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('location_id');
            $table->string('social_reason', 255);
            $table->string('abbreviated', 255);
            $table->string('cnpj', 20)->unique();
            $table->string('ie', 20)->nullable();
            $table->string('im', 20)->nullable();
            $table->string('email', 100)->unique();
            $table->string('image_logo', 100)->nullable();
            $table->bigInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
