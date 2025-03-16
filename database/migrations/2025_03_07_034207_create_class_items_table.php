<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassItemsTable extends Migration
{
    public function up()
    {
        Schema::create('class_items', function (Blueprint $table) {
            $table->foreignId('class_id')->constrained()->onDelete('cascade');
            $table->foreignId('items_id')->constrained('items')->onDelete('cascade');
            $table->primary(['class_id', 'items_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_items');
    }
}
