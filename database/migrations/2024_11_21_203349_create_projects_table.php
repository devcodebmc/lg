<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('location');
            $table->string('manager');
            $table->string('type');
            $table->date('delivery_date')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('cover_video')->nullable();
            $table->json('finishes')->nullable(); // Para almacenar los acabados
            $table->json('proceedings')->nullable(); // Para almacenar los procesos
            $table->timestamps(); // created_at and updated_at
            $table->softDeletes(); // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
