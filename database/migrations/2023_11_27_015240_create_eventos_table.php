<?php

use App\Models\Evento;
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
        Schema::create('eventos', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->enum('type', [Evento::ASESORIA, Evento::CITA])->nullable(false);

            $table->text('descripcion');

            $table->dateTime('start');

            $table->foreignId('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');

            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
