<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('price_lists', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->json('content');
        });
    }

    public function down()
    {
        Schema::dropIfExists('price_lists');
    }
};