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
        Schema::table('danhmuc', function (Blueprint $table) {
            $table->unsignedBigInteger('hang_id');
            $table->foreign('hang_id')->references('mahanghoa')->on('hanghoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('danhmuc', function (Blueprint $table) {
            $table->dropForeign(['hang_id']);
        });
    }
};
