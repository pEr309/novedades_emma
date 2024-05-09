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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prducto');
            $table->integer('cantidad');
            $table->double('total');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('productos_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on ('users')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
                  $table->foreign('productos_id')
                  ->references('id')
                  ->on ('productos')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
