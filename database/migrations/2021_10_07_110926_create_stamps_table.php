<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stamps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path_image');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stamps');
    }
}
