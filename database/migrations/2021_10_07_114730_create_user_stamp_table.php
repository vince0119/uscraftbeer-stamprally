<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserStampTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_stamp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('stamp_id');
            $table->unsignedBigInteger('token_id');
            $table->dateTime('collect_at');
            $table->tinyInteger('prize_type')->nullable()->comment('1: for over 4 stamps; 2: for 8 stamps');
            $table->dateTime('prize_at')->nullable();
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
        Schema::dropIfExists('user_stamp');
    }
}
