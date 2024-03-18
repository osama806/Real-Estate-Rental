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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete();
            $table->bigInteger("owner_id")->unsigned();
            $table->foreign("owner_id")->references("id")->on("owners")->cascadeOnDelete();
            $table->bigInteger("estate_id")->unsigned();
            $table->foreign("estate_id")->references("id")->on("estates")->cascadeOnDelete();
            $table->double("price");
            $table->string("currency")->default("USD");
            $table->timestamp("expired_date");
            $table->enum("extension", ["yes", "no"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
